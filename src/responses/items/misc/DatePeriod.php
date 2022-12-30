<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Период
 *
 * Class DatePeriod
 * @package mfteam\kontur\responses\lessee\items
 */
class DatePeriod extends AbstractBaseItem
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
}