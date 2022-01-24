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
 * Исключение при 403 ответе от сервера
 *
 * Class KonturForbiddenException
 * @package mfteam\kontur\exceptions
 */
class KonturForbiddenException extends Exception implements KonturExceptionInterface
{
    /**
     * @inheritDoc
     */
    public function __construct($message = "")
    {
        parent::__construct($message, 403);
    }
}
