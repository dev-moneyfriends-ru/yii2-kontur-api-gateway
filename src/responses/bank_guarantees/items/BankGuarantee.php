<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\bank_guarantees\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\company\CompanyCustomer;
use mfteam\kontur\responses\items\misc\Price;

/**
 * Банковская гарантия
 *
 * Class BankGuarantee
 * @package mfteam\kontur\responses\bank_guarantees\items
 */
class BankGuarantee extends AbstractBaseItem
{
    /** @var string */
    public const TYPE_PURCHASE = 'Purchase';

    /** @var string */
    public const TYPE_CONTRACT = 'Contract';

    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $releaseDate;

    /**
     * @var string|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $assuranceType;

    /**
     * @var string
     */
    protected $purchaseNumber;

    /**
     * @var CompanyCustomer
     */
    protected $bank;

    /**
     * @var CompanyCustomer
     */
    protected $principal;

    /**
     * @var CompanyCustomer
     */
    protected $beneficiary;

    /**
     * @var Price
     */
    protected $guaranteeSum;

    /**
     * @param array $data
     */
    public function setGuaranteeSum(array $data): void
    {
        $this->guaranteeSum = new Price($data);
    }

    /**
     * @param array $data
     */
    public function setBeneficiary(array $data): void
    {
        $this->beneficiary = new CompanyCustomer($data);
    }

    /**
     * @param array $data
     */
    public function setPrincipal(array $data): void
    {
        $this->principal = new CompanyCustomer($data);
    }

    /**
     * @param array $data
     */
    public function setBank(array $data): void
    {
        $this->bank = new CompanyCustomer($data);
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getReleaseDate(): ?string
    {
        return $this->releaseDate;
    }

    /**
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getAssuranceType(): string
    {
        return $this->assuranceType;
    }

    /**
     * @return string
     */
    public function getPurchaseNumber(): string
    {
        return $this->purchaseNumber;
    }

    /**
     * @return CompanyCustomer
     */
    public function getBank(): CompanyCustomer
    {
        return $this->bank;
    }

    /**
     * @return CompanyCustomer
     */
    public function getPrincipal(): CompanyCustomer
    {
        return $this->principal;
    }

    /**
     * @return CompanyCustomer
     */
    public function getBeneficiary(): CompanyCustomer
    {
        return $this->beneficiary;
    }

    /**
     * @return Price
     */
    public function getGuaranteeSum(): Price
    {
        return $this->guaranteeSum;
    }
}