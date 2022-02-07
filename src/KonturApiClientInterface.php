<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 12:12
 */

namespace mfteam\kontur;

use Exception;
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
     * @return array
     * @throws Exception
     */
    public function sendGetQuery(
        string $url,
        array $data = [],
        array $headers = [],
        array $options = []
    ): array;

    /**
     * GET запрос на скачивание файла
     *
     * @param string $url
     * @param array $data
     * @param array $headers
     * @param array $options
     *
     * @return string
     * @throws Exception
     */
    public function sendDownloadQuery(
        string $url,
        array $data = [],
        array $headers = [],
        array $options = []
    ): string;
}
