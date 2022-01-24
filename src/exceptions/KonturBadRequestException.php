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
 * Исключение при 400 ответе от сервера
 *
 * Class KonturBadRequestException
 * @package mfteam\kontur\exceptions
 */
class KonturBadRequestException extends Exception implements KonturExceptionInterface
{
    /**
     * @inheritDoc
     */
    public function __construct($message = "")
    {
        parent::__construct($message, 400);
    }
}
