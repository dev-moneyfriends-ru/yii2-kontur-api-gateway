<?php

namespace mfteam\kontur\responses\egrl_details;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Уставный капитал
 *
 * Class StatedCapitalEgrlDetailItem
 * @package mfteam\kontur\responses\egrl_details
 */
class StatedCapitalEgrlDetailItem extends AbstractKonturBaseItem
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