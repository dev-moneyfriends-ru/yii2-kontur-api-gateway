<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 15:42
 */

namespace mfteam\kontur\responses\all_peps;

use mfteam\kontur\responses\AbstractBaseObject;
use mfteam\kontur\responses\ResponseInterface;

/**
 * Полный список публичных должностных лиц
 *
 * Class AllPepsResponse
 * @package mfteam\kontur\responses\all_peps
 */
class AllPepsResponse extends AbstractBaseObject implements ResponseInterface
{
    /**
     * @var string|null
     */
    protected $docNumber;

    /**
     * @var string|null
     */
    protected $docDate;

    /**
     * @var string|null
     */
    protected $persons;
}
