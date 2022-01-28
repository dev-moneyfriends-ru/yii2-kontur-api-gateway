<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 13:38
 */

namespace mfteam\kontur\responses\req\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\address\Address;
use mfteam\kontur\responses\items\company\CompanyBranchCollection;
use mfteam\kontur\responses\items\company\CompanyName;
use mfteam\kontur\responses\items\company\CompanyULStatus;
use mfteam\kontur\responses\items\person\PersonPositionCollection;
use mfteam\kontur\responses\items\person\PersonSubjectCollection;

/**
 * Информация о ЮЛ
 *
 * Class ULReq
 * @package mfteam\kontur\responses\items
 */
class ULReq extends AbstractBaseItem
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
     * @var CompanyName|null
     */
    protected $legalName;

    /**
     * @var Address|null
     */
    protected $legalAddress;

    /**
     * @var string|null
     */
    protected $registrationDate;

    /**
     * @var string|null
     */
    protected $dissolutionDate;

    /**
     * @var PersonPositionCollection|null
     */
    protected $heads;

    /**
     * @var PersonSubjectCollection|null
     */
    protected $managementCompanies;

    /**
     * @var CompanyULStatus|null
     */
    protected $status;

    /**
     * @var CompanyBranchCollection|null
     */
    protected $branches;

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
     * @return CompanyName|null
     */
    public function getLegalName(): ?CompanyName
    {
        return $this->legalName;
    }

    /**
     * @return Address|null
     */
    public function getLegalAddress(): ?Address
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
     * @return PersonPositionCollection|null
     */
    public function getHeads(): ?PersonPositionCollection
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
        $this->legalName = new CompanyName($data);
    }

    /**
     * @param array $data
     */
    public function setLegalAddress(array $data = []): void
    {
        $this->legalAddress = new Address($data);
    }

    /**
     * @param array $data
     */
    public function setHeads(array $data = []): void
    {
        $this->heads = new PersonPositionCollection($data);
    }

    /**
     * @return string|null
     */
    public function getDissolutionDate(): ?string
    {
        return $this->dissolutionDate;
    }

    /**
     * @return PersonSubjectCollection|null
     */
    public function getManagementCompanies(): ?PersonSubjectCollection
    {
        return $this->managementCompanies;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setManagementCompanies(array $data = []): void
    {
        $this->managementCompanies = new PersonSubjectCollection($data);
    }

    /**
     * @return CompanyULStatus|null
     */
    public function getStatus(): ?CompanyULStatus
    {
        return $this->status;
    }

    /**
     * @param array $data
     */
    public function setStatus(array $data = []): void
    {
        $this->status = new CompanyULStatus($data);
    }

    /**
     * @return CompanyBranchCollection|null
     */
    public function getBranches(): ?CompanyBranchCollection
    {
        return $this->branches;
    }

    /**
     * @param array $data
     */
    public function setBranches(array $data = []): void
    {
        $this->branches = new CompanyBranchCollection($data);
    }
}
