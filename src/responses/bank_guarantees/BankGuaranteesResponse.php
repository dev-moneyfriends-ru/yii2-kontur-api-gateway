<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\bank_guarantees;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\bank_guarantees\items\BankGuaranteeCollection;

/**
 * Банковские гарантии
 *
 * Class BankGuaranteesResponse
 * @package mfteam\kontur\responses\bank_guarantees
 */
class BankGuaranteesResponse extends AbstractCompanyResponse
{
    /** @var string Принципал */
    public const ROLE_PRINCIPAL = 'Principal';

    /** @var string Банк-гарант */
    public const ROLE_BANK = 'Bank';

    /**
     * @var string
     */
    protected $role;

    /**
     * @var BankGuaranteeCollection|null
     */
    protected $bankGuarantees;

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return BankGuaranteeCollection|null
     */
    public function getBankGuarantees(): ?BankGuaranteeCollection
    {
        return $this->bankGuarantees;
    }

    /**
     * @param array $data
     */
    public function setBankGuarantees(array $data): void
    {
        $this->bankGuarantees = new BankGuaranteeCollection($data);
    }
}
