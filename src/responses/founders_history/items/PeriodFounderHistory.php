<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:57
 */

namespace mfteam\kontur\responses\founders_history\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Сведения о долях владения
 *
 * Class PeriodFounderHistory
 * @package mfteam\kontur\responses\founders_history\items
 */
class PeriodFounderHistory extends AbstractBaseItem
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
     * @var EgrulFounderHistory|null
     */
    protected $egrul;

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
     * @return EgrulFounderHistory|null
     */
    public function getEgrul(): ?EgrulFounderHistory
    {
        return $this->egrul;
    }

    /**
     * @param array $data
     */
    public function setEgrul(array $data = []): void
    {
        $this->egrul = new EgrulFounderHistory($data);
    }
}
