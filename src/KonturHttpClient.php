<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 11:19
 */

namespace mfteam\kontur;

use yii\httpclient\Client;
use yii\httpclient\Exception;
use yii\httpclient\Request;
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
     * @throws Exception
     */
    public function sendGetQuery(
        string $url,
        array  $data = [],
        array  $headers = [],
        array  $options = []
    ): Response
    {
        return $this
            ->get($url, $data, $headers, $options)
            ->send();
    }


}
