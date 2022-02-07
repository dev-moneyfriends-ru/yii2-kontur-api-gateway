<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 14:25
 */

namespace mfteam\kontur\exceptions;

use Exception;

/**
 * Исключение при скачивании файла
 *
 * Class KonturDownloadFileException
 * @package mfteam\kontur\exceptions
 */
class KonturDownloadFileException extends Exception implements KonturExceptionInterface
{
    /**
     * @inheritDoc
     */
    public function __construct($message = "")
    {
        parent::__construct($message);
    }
}
