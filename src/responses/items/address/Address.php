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
 * Адрес
 *
 * Class Address
 * @package mfteam\kontur\responses\items
 */
class Address extends AbstractBaseItem
{
    /**
     * @var AddressParsed|null
     */
    protected $parsedAddressRF;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $firstDate;

    /**
     * @return AddressParsed|null
     */
    public function getParsedAddressRF(): ?AddressParsed
    {
        return $this->parsedAddressRF;
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
    public function getFirstDate(): ?string
    {
        return $this->firstDate;
    }

    /**
     * @param array $data
     */
    public function setParsedAddressRF(array $data = []): void
    {
        $this->parsedAddressRF = new AddressParsed($data);
    }

    /**
     * Полный адрес
     *
     * @return string|null
     */
    public function getFullAddress(): ?string
    {
        $parsedAddress = $this->getParsedAddressRF();
        if ($parsedAddress === null) {
            return null;
        }

        $address = [
            $parsedAddress->getZipCode(),
            $parsedAddress->getRegionName()->getConcatShortValue(),
            $parsedAddress->getCity()->getConcatShortValue(),
            $parsedAddress->getDistrict()->getConcatShortValue(),
            $parsedAddress->getSettlement()->getConcatShortValue(),
            $parsedAddress->getStreet()->getConcatShortValue(),
            $parsedAddress->getHouseRaw(),
            $parsedAddress->getBulkRaw(),
            $parsedAddress->getFlatRaw(),
        ];

        $address = array_filter($address);

        return implode(', ', $address);
    }
}