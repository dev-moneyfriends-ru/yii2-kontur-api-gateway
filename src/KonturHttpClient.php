<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 11:19
 */

namespace mfteam\kontur;

use Exception;
use mfteam\kontur\exceptions\KonturBadRequestException;
use mfteam\kontur\exceptions\KonturForbiddenException;
use mfteam\kontur\exceptions\KonturNotFoundException;
use mfteam\kontur\exceptions\KonturTooManyRequestException;
use yii\httpclient\Client;
use yii\httpclient\RequestEvent;
use yii\httpclient\Response;

/**
 * Клиент работы с API Контура
 *
 * Class KonturHttpClient
 * @package mf-team\kontur-gateway
 */
class KonturHttpClient extends Client implements KonturApiClientInterface
{
    /**
     * Базовый домен
     *
     * @var string
     */
    const BASE_URL = 'https://focus-api.kontur.ru/api3';

    /**
     * API ключ доступа
     *
     * @var string
     */
    private $apiKey;

    /**
     * @inheritDoc
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        parent::__construct([
            'baseUrl' => self::BASE_URL,
        ]);
    }

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $apiKey = $this->apiKey;

        $this->on(
            Client::EVENT_BEFORE_SEND,
            static function (RequestEvent $event) use ($apiKey) {
                $event
                    ->request
                    ->addData([
                        'key' => $apiKey,
                    ]);
            }
        );
    }

    /**
     * @inheritDoc
     */
    public function sendGetQuery(
        string $url,
        array  $data = [],
        array  $headers = [],
        array  $options = []
    ): array
    {
        $response = $this
            ->get($url, $data, $headers, $options)
            ->send();

        if ($response->isOk === true) {
            return $response->getData();
        }

        $this->responseFailure($response);
    }

    /**
     * @inheritDoc
     * @throws KonturNotFoundException
     */
    public function sendDownloadQuery(
        string $url,
        array  $data = [],
        array  $headers = [],
        array  $options = []
    ): string
    {
        $response = $this
            ->get($url, $data, $headers, $options)
            ->send();

        if ($response->isOk === true) {
            return $response->content;
        }

        $this->responseFailure($response);
    }

    /**
     * Обработка ошибки ответа
     *
     * @param Response $response
     *
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturNotFoundException
     * @throws KonturTooManyRequestException
     * @throws Exception
     */
    private function responseFailure(Response $response)
    {
        $content = $response->content;

        switch ($response->statusCode) {
            case 400:
                throw new KonturBadRequestException($content);
            case 403:
                throw new KonturForbiddenException($content);
            case 404:
                throw new KonturNotFoundException($content);
            case 429:
                throw new KonturTooManyRequestException($content);
            default:
                throw new Exception('Unexpected error');
        }
    }
}
