<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 18:05
 */

namespace mfteam\kontur\responses\beneficial_owners;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\beneficial_owners\items\ItemBeneficialOwners;
use mfteam\kontur\responses\beneficial_owners\items\StatedCapitalBeneficialOwners;

/**
 * Конечные бенефициары
 *
 * Class BeneficialOwners
 * @package mfteam\kontur\responses\beneficial_owners
 */
class BeneficialOwnersResponse extends AbstractCompanyResponse
{
    /**
     * @var StatedCapitalBeneficialOwners|null
     */
    protected $statedCapital;

    /**
     * @var ItemBeneficialOwners|null
     */
    protected $beneficialOwners;

    /**
     * @var ItemBeneficialOwners|null
     */
    protected $historicalBeneficialOwners;

    /**
     * @param array $data
     */
    public function setStatedCapital(array $data = []): void
    {
        $this->statedCapital = new StatedCapitalBeneficialOwners($data);
    }

    /**
     * @param array $data
     */
    public function setBeneficialOwners(array $data = []): void
    {
        $this->beneficialOwners = new ItemBeneficialOwners($data);
    }

    /**
     * @param array $data
     */
    public function setHistoricalBeneficialOwners(array $data = []): void
    {
        $this->historicalBeneficialOwners = new ItemBeneficialOwners($data);
    }

    /**
     * @return StatedCapitalBeneficialOwners|null
     */
    public function getStatedCapital(): ?StatedCapitalBeneficialOwners
    {
        return $this->statedCapital;
    }

    /**
     * @return ItemBeneficialOwners|null
     */
    public function getBeneficialOwners(): ?ItemBeneficialOwners
    {
        return $this->beneficialOwners;
    }

    /**
     * @return ItemBeneficialOwners|null
     */
    public function getHistoricalBeneficialOwners(): ?ItemBeneficialOwners
    {
        return $this->historicalBeneficialOwners;
    }
}
