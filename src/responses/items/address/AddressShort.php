<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:11
 */

namespace mfteam\kontur\responses\items\address;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Сокращенный адрес
 *
 * Class AddressShort
 * @package mfteam\kontur\responses\items\address
 */
class AddressShort extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $regionCode;

    /**
     * @var AddressTopo|null
     */
    protected $regionName;

    /**
     * @var AddressTopo|null
     */
    protected $district;

    /**
     * @var AddressTopo|null
     */
    protected $city;

    /**
     * @var AddressTopo|null
     */
    protected $settlement;

    /**
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    /**
     * @return AddressTopo|null
     */
    public function getRegionName(): ?AddressTopo
    {
        return $this->regionName;
    }

    /**
     * @return AddressTopo|null
     */
    public function getDistrict(): ?AddressTopo
    {
        return $this->district;
    }

    /**
     * @return AddressTopo|null
     */
    public function getCity(): ?AddressTopo
    {
        return $this->city;
    }

    /**
     * @return AddressTopo|null
     */
    public function getSettlement(): ?AddressTopo
    {
        return $this->settlement;
    }

    /**
     * @param array $data
     */
    public function setRegionName(array $data = []): void
    {
        $this->regionName = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setDistrict(array $data = []): void
    {
        $this->district = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setCity(array $data = []): void
    {
        $this->city = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setSettlement(array $data = []): void
    {
        $this->settlement = new AddressTopo($data);
    }
}
