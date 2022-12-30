<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\lessee\items\LesseeContractCollection;

/**
 * Договоры лизинга
 *
 * Class LesseeResponse
 * @package mfteam\kontur\responses\lessee
 */
class LesseeResponse extends AbstractCompanyResponse
{
    /**
     * @var LesseeContractCollection|null
     */
    protected $contracts;

    /**
     * @return LesseeContractCollection|null
     */
    public function getContracts(): ?LesseeContractCollection
    {
        return $this->contracts;
    }

    /**
     * @param array $data
     */
    public function setContracts(array $data = []): void
    {
        $this->contracts = new LesseeContractCollection($data);
    }
}