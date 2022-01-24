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
 * Адрес
 *
 * Class CompanyAddressItemResponse
 * @package mfteam\kontur\responses\items
 */
class AddressItem extends AbstractKonturBaseItem
{
    /**
     * @var AddressParsedItem|null
     */
    protected $parsedAddressRF;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return AddressParsedItem|null
     */
    public function getParsedAddressRF(): ?AddressParsedItem
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
     * @var string|null
     */
    protected $firstDate;

    /**
     * @param array $data
     */
    public function setParsedAddressRF(array $data = []): void
    {
        $this->parsedAddressRF = new AddressParsedItem($data);
    }
}