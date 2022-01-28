<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\address;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Разобранный на составляющие адрес в РФ
 *
 * Class AddressParsed
 * @package mfteam\kontur\responses\items
 */
class AddressParsed extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $zipCode;

    /**
     * @var string|null
     */
    protected $kladrCode;

    /**
     * @var string|null
     */
    protected $regionCode;

    /**
     * @var string|null
     */
    protected $houseRaw;

    /**
     * @var string|null
     */
    protected $bulkRaw;

    /**
     * @var string|null
     */
    protected $flatRaw;

    /**
     * @var bool|null
     */
    protected $isConverted;

    /**
     * @var AddressTopo|null
     */
    protected $settlement;

    /**
     * @var AddressTopo|null
     */
    protected $district;

    /**
     * @var AddressTopo|null
     */
    protected $regionName;

    /**
     * @var AddressTopo|null
     */
    protected $city;

    /**
     * @var AddressTopo|null
     */
    protected $street;

    /**
     * @var AddressTopo|null
     */
    protected $house;

    /**
     * @var AddressTopo|null
     */
    protected $bulk;

    /**
     * @var AddressTopo|null
     */
    protected $flat;

    /**
     * @param array $data
     */
    public function setSettlement(array $data = []): void
    {
        $this->settlement = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setDistrict(array $data = []): void
    {
        $this->district = new AddressTopo($data);
    }

    /**
     * @return AddressTopo|null
     */
    public function getSettlement(): ?AddressTopo
    {
        return $this->settlement;
    }

    /**
     * @return AddressTopo|null
     */
    public function getDistrict(): ?AddressTopo
    {
        return $this->district;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @return string|null
     */
    public function getKladrCode(): ?string
    {
        return $this->kladrCode;
    }

    /**
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    /**
     * @return string|null
     */
    public function getHouseRaw(): ?string
    {
        return $this->houseRaw;
    }

    /**
     * @return string|null
     */
    public function getFlatRaw(): ?string
    {
        return $this->flatRaw;
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
    public function getCity(): ?AddressTopo
    {
        return $this->city;
    }

    /**
     * @return AddressTopo|null
     */
    public function getStreet(): ?AddressTopo
    {
        return $this->street;
    }

    /**
     * @return AddressTopo|null
     */
    public function getHouse(): ?AddressTopo
    {
        return $this->house;
    }

    /**
     * @return AddressTopo|null
     */
    public function getBulk(): ?AddressTopo
    {
        return $this->bulk;
    }

    /**
     * @return AddressTopo|null
     */
    public function getFlat(): ?AddressTopo
    {
        return $this->flat;
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
    public function setCity(array $data = []): void
    {
        $this->city = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setStreet(array $data = []): void
    {
        $this->street = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setHouse(array $data = []): void
    {
        $this->house = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setBulk(array $data = []): void
    {
        $this->bulk = new AddressTopo($data);
    }

    /**
     * @param array $data
     */
    public function setFlat(array $data = []): void
    {
        $this->flat = new AddressTopo($data);
    }

    /**
     * @return string|null
     */
    public function getBulkRaw(): ?string
    {
        return $this->bulkRaw;
    }

    /**
     * @return bool|null
     */
    public function getIsConverted(): ?bool
    {
        return $this->isConverted;
    }
}