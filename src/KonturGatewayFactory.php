<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 14:07
 */

namespace mfteam\kontur;

/**
 * Фабрика создание шлюза
 *
 * Class KonturGatewayFactory
 * @package mfteam\kontur\components
 */
class KonturGatewayFactory
{
    /**
     * Создание шлюза на основе http клиента
     *
     * @param string $apiKey
     *
     * @return KonturGateway
     */
    public static function instanceHttp(string $apiKey): KonturGateway
    {
        $apiClient = new KonturHttpClient($apiKey);

        return new KonturGateway($apiClient);
    }
}