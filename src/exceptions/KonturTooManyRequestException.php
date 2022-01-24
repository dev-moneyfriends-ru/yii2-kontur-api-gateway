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
 * Исключение при 429 ответе от сервера
 *
 * Class KonturTooManyRequestException
 * @package mfteam\kontur\exceptions
 */
class KonturTooManyRequestException extends Exception implements KonturExceptionInterface
{
    /**
     * @inheritDoc
     */
    public function __construct($message = "")
    {
        parent::__construct($message, 429);
    }
}
