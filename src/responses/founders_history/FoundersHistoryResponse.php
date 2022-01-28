<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:38
 */

namespace mfteam\kontur\responses\founders_history;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\founders_history\items\CompanyFounderHistoryCollection;
use mfteam\kontur\responses\founders_history\items\FounderHistoryCollection;

/**
 * История владения организацией
 *
 * Class FoundersHistoryResponse
 * @package mfteam\kontur\responses\founders_history
 */
class FoundersHistoryResponse extends AbstractCompanyResponse
{
    /**
     * @var CompanyFounderHistoryCollection|null
     */
    protected $companyHistory;

    /**
     * @var FounderHistoryCollection|null
     */
    protected $foundersHistory;

    /**
     * @return CompanyFounderHistoryCollection|null
     */
    public function getCompanyHistory(): ?CompanyFounderHistoryCollection
    {
        return $this->companyHistory;
    }

    /**
     * @return FounderHistoryCollection|null
     */
    public function getFoundersHistory(): ?FounderHistoryCollection
    {
        return $this->foundersHistory;
    }

    /**
     * @param array $data
     */
    public function setCompanyHistory(array $data = []): void
    {
        $this->companyHistory = new CompanyFounderHistoryCollection($data);
    }

    /**
     * @param array $data
     */
    public function setFoundersHistory(array $data = []): void
    {
        $this->foundersHistory = new FounderHistoryCollection($data);
    }
}
