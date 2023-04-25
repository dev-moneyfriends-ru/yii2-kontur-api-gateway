<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\person\PersonPositionCollection;

/**
 * История изменения ЮР.лица
 * Class CompanyHistory
 * @package mfteam\kontur\responses\items\company
 */
class CompanyHistory extends AbstractBaseItem
{
    /**
     * @var KppCollection|null
     */
    protected $kpps;
    /**
     * @var LegalNameCollection|null
     */
    protected $legalNames;
    /**
     * @var LegalAddressCollection|null
     */
    protected $legalAddresses;
    /**
     * @var ManagementCompanyCollection|null
     */
    protected $managementCompanies;
    /**
     * @var PersonPositionCollection|null
     */
    protected $heads;

    /**
     * @return KppCollection|null
     */
    public function getKpps(): ?KppCollection
    {
        return $this->kpps;
    }

    /**
     * @param array $data
     */
    public function setKpps(array $data = []): void
    {
        $this->kpps = new KppCollection($data);
    }

    /**
     * @return LegalNameCollection|null
     */
    public function getLegalNames(): ?LegalNameCollection
    {
        return $this->legalNames;
    }

    /**
     * @param array $data
     */
    public function setLegalNames(array $data = []): void
    {
        $this->legalNames = new LegalNameCollection($data);
    }

    /**
     * @return LegalAddressCollection|null
     */
    public function getLegalAddresses(): ?LegalAddressCollection
    {
        return $this->legalAddresses;
    }

    /**
     * @param array $data
     */
    public function setLegalAddresses(array $data = []): void
    {
        $this->legalAddresses = new LegalAddressCollection($data);
    }

    /**
     * @return ManagementCompanyCollection|null
     */
    public function getManagementCompanies(): ?ManagementCompanyCollection
    {
        return $this->managementCompanies;
    }


    /**
     * @param array $data
     */
    public function setManagementCompanies(array $data = []): void
    {
        $this->managementCompanies = new ManagementCompanyCollection($data);
    }

    /**
     * @return PersonPositionCollection|null
     */
    public function getHeads(): ?PersonPositionCollection
    {
        return $this->heads;
    }

    /**
     * @param array $data
     */
    public function setHeads(array $data = []): void
    {
        $this->heads = new PersonPositionCollection($data);
    }
}
