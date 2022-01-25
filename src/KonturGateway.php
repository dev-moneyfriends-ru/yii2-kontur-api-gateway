<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 12:10
 */

namespace mfteam\kontur;

use mfteam\kontur\exceptions\KonturBadRequestException;
use mfteam\kontur\exceptions\KonturForbiddenException;
use mfteam\kontur\exceptions\KonturTooManyRequestException;
use mfteam\kontur\requests\KonturRequestInterface;
use mfteam\kontur\responses\analytics\KonturAnalyticsResponse;
use mfteam\kontur\responses\KonturCollectionResponse;
use mfteam\kontur\responses\req\KonturReqResponse;
use yii\httpclient\Response;
use yii\web\HttpException;

/**
 * Шлюз общения с API Контур.Фокус
 *
 * Class KonturGateway
 * @package mfteam\kontur\components
 */
class KonturGateway
{
    /**
     * Api клиент
     *
     * @var KonturApiClientInterface
     */
    protected $apiClient;

    /**
     * @param KonturApiClientInterface $apiClient
     */
    public function __construct(KonturApiClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * Базовые реквизиты
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Freq
     *
     * @param KonturRequestInterface $request
     *
     * @return KonturReqResponse[]
     * @throws HttpException
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function req(KonturRequestInterface $request): array
    {
        $response = $this->get('req', $request->toArray());

        return $this
            ->createCollection($response, KonturReqResponse::class)
            ->getItems();
    }

    /**
     * Расширенная аналитика
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Fanalytics
     *
     * @param KonturRequestInterface $request
     *
     * @return KonturAnalyticsResponse[]
     * @throws HttpException
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function analytics(KonturRequestInterface $request): array
    {
        $response = $this->get('analytics', $request->toArray());

        return $this
            ->createCollection($response, KonturAnalyticsResponse::class)
            ->getItems();
    }

    /**
     * Расширенные сведения на основе ЕГРЮЛ/ЕГРИП
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FegrDetails
     *
     * @param KonturRequestInterface $request
     *
     * @return KonturAnalyticsResponse[]
     * @throws HttpException
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function egrDetails(KonturRequestInterface $request): array
    {
        $response = $this->get('egrDetails', $request->toArray());

        return $this
            ->createCollection($response, KonturAnalyticsResponse::class)
            ->getItems();
    }

    /**
     * GET запрос
     *
     * @param string $path
     * @param array $data
     *
     * @return Response
     * @throws KonturForbiddenException
     * @throws KonturBadRequestException
     * @throws KonturTooManyRequestException
     * @throws HttpException
     */
    private function get(string $path, array $data = []): Response
    {
        $response = $this
            ->apiClient
            ->sendGetQuery($path, $data);

        if ($response->isOk === true) {
            return $response;
        }

        $content = $response->content;

        switch ($response->statusCode) {
            case 400:
                throw new KonturBadRequestException($content);
            case 403:
                throw new KonturForbiddenException($content);
            case 429:
                throw new KonturTooManyRequestException($content);
            default:
                throw new HttpException('Unexpected error');
        }
    }

    /**
     * Формирование коллекции ответа от сервера
     *
     * @param Response $response
     * @param string $dataClass
     *
     * @return KonturCollectionResponse
     */
    private function createCollection(Response $response, string $dataClass): KonturCollectionResponse
    {
        $data = $response->getData();

        return new KonturCollectionResponse($dataClass, $data);
    }
}
