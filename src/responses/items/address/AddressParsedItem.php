<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\address;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Разобранный на составляющие адрес в РФ
 *
 * Class AddressParsedItemResponse
 * @package mfteam\kontur\responses\items
 */
class AddressParsedItem extends AbstractKonturBaseItem
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
     * @var AddressTopoItem|null
     */
    protected $regionName;

    /**
     * @var AddressTopoItem|null
     */
    protected $city;

    /**
     * @var AddressTopoItem|null
     */
    protected $street;

    /**
     * @var AddressTopoItem|null
     */
    protected $house;

    /**
     * @var AddressTopoItem|null
     */
    protected $bulk;

    /**
     * @var AddressTopoItem|null
     */
    protected $flat;

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
     * @return AddressTopoItem|null
     */
    public function getRegionName(): ?AddressTopoItem
    {
        return $this->regionName;
    }

    /**
     * @return AddressTopoItem|null
     */
    public function getCity(): ?AddressTopoItem
    {
        return $this->city;
    }

    /**
     * @return AddressTopoItem|null
     */
    public function getStreet(): ?AddressTopoItem
    {
        return $this->street;
    }

    /**
     * @return AddressTopoItem|null
     */
    public function getHouse(): ?AddressTopoItem
    {
        return $this->house;
    }

    /**
     * @return AddressTopoItem|null
     */
    public function getBulk(): ?AddressTopoItem
    {
        return $this->bulk;
    }

    /**
     * @return AddressTopoItem|null
     */
    public function getFlat(): ?AddressTopoItem
    {
        return $this->flat;
    }

    /**
     * @param array $data
     */
    public function setRegionName(array $data = []): void
    {
        $this->regionName = new AddressTopoItem($data);
    }

    /**
     * @param array $data
     */
    public function setCity(array $data = []): void
    {
        $this->city = new AddressTopoItem($data);
    }

    /**
     * @param array $data
     */
    public function setStreet(array $data = []): void
    {
        $this->street = new AddressTopoItem($data);
    }

    /**
     * @param array $data
     */
    public function setHouse(array $data = []): void
    {
        $this->house = new AddressTopoItem($data);
    }

    /**
     * @param array $data
     */
    public function setBulk(array $data = []): void
    {
        $this->bulk = new AddressTopoItem($data);
    }

    /**
     * @param array $data
     */
    public function setFlat(array $data = []): void
    {
        $this->flat = new AddressTopoItem($data);
    }

    /**
     * @return string|null
     */
    public function getBulkRaw(): ?string
    {
        return $this->bulkRaw;
    }
}