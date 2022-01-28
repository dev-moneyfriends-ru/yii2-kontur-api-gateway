<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 17:07
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\address\AddressForeign;
use mfteam\kontur\responses\items\address\AddressParsed;

/**
 * Филиал
 *
 * Class CompanyBranch
 * @package mfteam\kontur\responses\items\company
 */
class CompanyBranch extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $kpp;

    /**
     * @var AddressParsed|null
     */
    protected $parsedAddressRF;

    /**
     * @var AddressForeign|null
     */
    protected $foreignAddress;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @param array $data
     */
    public function setParsedAddressRF(array $data = []): void
    {
        $this->parsedAddressRF = new AddressParsed($data);
    }

    /**
     * @param array $data
     */
    public function setForeignAddress(array $data = []): void
    {
        $this->foreignAddress = new AddressForeign($data);
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * @return AddressParsed|null
     */
    public function getParsedAddressRF(): ?AddressParsed
    {
        return $this->parsedAddressRF;
    }

    /**
     * @return AddressForeign|null
     */
    public function getForeignAddress(): ?AddressForeign
    {
        return $this->foreignAddress;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}
