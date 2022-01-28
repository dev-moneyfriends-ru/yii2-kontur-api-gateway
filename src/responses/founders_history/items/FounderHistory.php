<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:53
 */

namespace mfteam\kontur\responses\founders_history\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Хронология изменения состава учредителей и участников
 *
 * Class FounderHistory
 * @package mfteam\kontur\responses\founders_history\items
 */
class FounderHistory extends AbstractBaseItem
{
    /**
     * @var InfoFounderHistory|null
     */
    protected $info;

    /**
     * @var PeriodFounderHistoryCollection|null
     */
    protected $periods;

    /**
     * @return InfoFounderHistory|null
     */
    public function getInfo(): ?InfoFounderHistory
    {
        return $this->info;
    }

    /**
     * @return PeriodFounderHistoryCollection|null
     */
    public function getPeriods(): ?PeriodFounderHistoryCollection
    {
        return $this->periods;
    }

    /**
     * @param array $data
     */
    public function setInfo(array $data = []): void
    {
        $this->info = new InfoFounderHistory($data);
    }

    /**
     * @param array $data
     */
    public function setPeriods(array $data = []): void
    {
        $this->periods = new PeriodFounderHistoryCollection($data);
    }
}
