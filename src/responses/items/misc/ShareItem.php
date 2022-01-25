<?php

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Доля участия
 *
 * Class ShareItem
 * @package mfteam\kontur\responses\items
 */
class ShareItem extends AbstractKonturBaseItem
{
    /**
     * @var number|null
     */
    protected $sum;

    /**
     * @var number|null
     */
    protected $percentagePlain;

    /**
     * @var int|null
     */
    protected $percentageNominator;

    /**
     * @var int|null
     */
    protected $percentageDenominator;

    /**
     * @return number|null
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @return number|null
     */
    public function getPercentagePlain()
    {
        return $this->percentagePlain;
    }

    /**
     * @return int|null
     */
    public function getPercentageNominator(): ?int
    {
        return $this->percentageNominator;
    }

    /**
     * @return int|null
     */
    public function getPercentageDenominator(): ?int
    {
        return $this->percentageDenominator;
    }
}