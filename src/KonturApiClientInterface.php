<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 12:12
 */

namespace mfteam\kontur;

use yii\httpclient\Response;

/**
 * Общий интерфейс клиента Контур.Фокус
 */
interface KonturApiClientInterface
{
    /**
     * GET запрос на получение данных
     *
     * @param string $url
     * @param array $data
     * @param array $headers
     * @param array $options
     *
     * @return Response
     */
    public function sendGetQuery(
        string $url,
        array $data = [],
        array $headers = [],
        array $options = []
    ): Response;
}