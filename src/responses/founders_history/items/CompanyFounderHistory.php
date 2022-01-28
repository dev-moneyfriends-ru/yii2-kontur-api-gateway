<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:43
 */

namespace mfteam\kontur\responses\founders_history\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\ShareShort;

/**
 * Изменение данных организации
 *
 * Class CompanyFounderHistory
 * @package mfteam\kontur\responses\founders_history\items
 */
class CompanyFounderHistory extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var float|null
     */
    protected $statedCapital;

    /**
     * @var ShareShort|null
     */
    protected $share;

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
     * @return float|null
     */
    public function getStatedCapital(): ?float
    {
        return $this->statedCapital;
    }

    /**
     * @return ShareShort|null
     */
    public function getShare(): ?ShareShort
    {
        return $this->share;
    }

    /**
     * @param array $data
     */
    public function setShare(array $data = []): void
    {
        $this->share = new ShareShort($data);
    }
}
