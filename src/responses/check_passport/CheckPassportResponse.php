<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 15:19
 */

namespace mfteam\kontur\responses\check_passport;

use mfteam\kontur\responses\AbstractBaseObject;
use mfteam\kontur\responses\ResponseInterface;

/**
 * Проверка паспортов
 *
 * Class CheckPassportResponse
 * @package mfteam\kontur\responses\check_passport
 */
class CheckPassportResponse extends AbstractBaseObject implements ResponseInterface
{
    /**
     * @var string|null
     */
    protected $passportNumber;

    /**
     * @var bool|null
     */
    protected $isInvalid;

    /**
     * @var string|null
     */
    protected $invalidSince;

    /**
     * @return string|null
     */
    public function getPassportNumber(): ?string
    {
        return $this->passportNumber;
    }

    /**
     * @return bool|null
     */
    public function getIsInvalid(): ?bool
    {
        return $this->isInvalid;
    }

    /**
     * @return string|null
     */
    public function getInvalidSince(): ?string
    {
        return $this->invalidSince;
    }
}
