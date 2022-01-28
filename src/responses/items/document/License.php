<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:28
 */

namespace mfteam\kontur\responses\items\document;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Лицензия
 *
 * Class License
 * @package mfteam\kontur\responses\items\document
 */
class License extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $source;

    /**
     * @var string|null
     */
    protected $officialNum;

    /**
     * @var string|null
     */
    protected $issuerName;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $dateStart;

    /**
     * @var string|null
     */
    protected $dateEnd;

    /**
     * @var string|null
     */
    protected $statusDescription;

    /**
     * @var string|null
     */
    protected $activity;

    /**
     * @var array
     */
    protected $services = [];

    /**
     * @var array
     */
    protected $addresses = [];

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @return string|null
     */
    public function getOfficialNum(): ?string
    {
        return $this->officialNum;
    }

    /**
     * @return string|null
     */
    public function getIssuerName(): ?string
    {
        return $this->issuerName;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getDateStart(): ?string
    {
        return $this->dateStart;
    }

    /**
     * @return string|null
     */
    public function getDateEnd(): ?string
    {
        return $this->dateEnd;
    }

    /**
     * @return string|null
     */
    public function getStatusDescription(): ?string
    {
        return $this->statusDescription;
    }

    /**
     * @return string|null
     */
    public function getActivity(): ?string
    {
        return $this->activity;
    }

    /**
     * @return array
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @return array
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }
}
