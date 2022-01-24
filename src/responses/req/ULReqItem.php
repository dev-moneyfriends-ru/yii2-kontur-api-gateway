<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 13:38
 */

namespace mfteam\kontur\responses\req;

use mfteam\kontur\responses\AbstractKonturBaseItem;
use mfteam\kontur\responses\items\address\AddressItem;
use mfteam\kontur\responses\items\company\CompanyHeadCollectionItem;
use mfteam\kontur\responses\items\company\CompanyNameItem;

/**
 * Информация о юридическом лице
 *
 * Class ULResponseItem
 * @package mfteam\kontur\responses\items
 */
class ULReqItem extends AbstractKonturBaseItem
{
    /**
     * @var string|null
     */
    protected $kpp;

    /**
     * @var string|null
     */
    protected $okpo;

    /**
     * @var string|null
     */
    protected $okato;

    /**
     * @var string|null
     */
    protected $okfs;

    /**
     * @var string|null
     */
    protected $oktmo;

    /**
     * @var string|null
     */
    protected $okogu;

    /**
     * @var string|null
     */
    protected $okopf;

    /**
     * @var string|null
     */
    protected $opf;

    /**
     * @var CompanyNameItem|null
     */
    protected $legalName;

    /**
     * @var AddressItem|null
     */
    protected $legalAddress;

    /**
     * @var string|null
     */
    protected $registrationDate;

    /**
     * @var CompanyHeadCollectionItem|null
     */
    protected $heads;

    /**
     * @return string|null
     */
    public function getOkpo(): ?string
    {
        return $this->okpo;
    }

    /**
     * @return string|null
     */
    public function getOkato(): ?string
    {
        return $this->okato;
    }

    /**
     * @return string|null
     */
    public function getOkfs(): ?string
    {
        return $this->okfs;
    }

    /**
     * @return string|null
     */
    public function getOktmo(): ?string
    {
        return $this->oktmo;
    }

    /**
     * @return string|null
     */
    public function getOkogu(): ?string
    {
        return $this->okogu;
    }

    /**
     * @return string|null
     */
    public function getOkopf(): ?string
    {
        return $this->okopf;
    }

    /**
     * @return string|null
     */
    public function getOpf(): ?string
    {
        return $this->opf;
    }

    /**
     * @return CompanyNameItem|null
     */
    public function getLegalName(): ?CompanyNameItem
    {
        return $this->legalName;
    }

    /**
     * @return AddressItem|null
     */
    public function getLegalAddress(): ?AddressItem
    {
        return $this->legalAddress;
    }

    /**
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->registrationDate;
    }

    /**
     * @return CompanyHeadCollectionItem|null
     */
    public function getHeads(): ?CompanyHeadCollectionItem
    {
        return $this->heads;
    }

    /**
     * @return string|null
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * @param array $data
     */
    public function setLegalName(array $data = []): void
    {
        $this->legalName = new CompanyNameItem($data);
    }

    /**
     * @param array $data
     */
    public function setLegalAddress(array $data = []): void
    {
        $this->legalAddress = new AddressItem($data);
    }

    /**
     * @param array $data
     */
    public function setHeads(array $data = []): void
    {
        $this->heads = new CompanyHeadCollectionItem($data);
    }
}
