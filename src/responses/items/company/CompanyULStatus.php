<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 17:04
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Статус компании - ЮЛ
 *
 * Class CompanyULStatus
 * @package mfteam\kontur\responses\items\company
 */
class CompanyULStatus extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $statusString;

    /**
     * @var bool|null
     */
    protected $reorganizing;

    /**
     * @var bool|null
     */
    protected $bankrupting;

    /**
     * @var bool|null
     */
    protected $dissolving;

    /**
     * @var bool|null
     */
    protected $dissolved;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getStatusString(): ?string
    {
        return $this->statusString;
    }

    /**
     * @return bool|null
     */
    public function getReorganizing(): ?bool
    {
        return $this->reorganizing;
    }

    /**
     * @return bool|null
     */
    public function getBankrupting(): ?bool
    {
        return $this->bankrupting;
    }

    /**
     * @return bool|null
     */
    public function getDissolving(): ?bool
    {
        return $this->dissolving;
    }

    /**
     * @return bool|null
     */
    public function getDissolved(): ?bool
    {
        return $this->dissolved;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}
