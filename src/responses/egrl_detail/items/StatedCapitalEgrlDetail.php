<?php

namespace mfteam\kontur\responses\egrl_detail\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Уставный капитал
 *
 * Class StatedCapitalEgrlDetail
 * @package mfteam\kontur\responses\egrl_detail
 */
class StatedCapitalEgrlDetail extends AbstractBaseItem
{
    /**
     * @var float|null
     */
    protected $sum;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return float|null
     */
    public function getSum(): ?float
    {
        return $this->sum;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}