<?php

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Доля участия
 *
 * Class Share
 * @package mfteam\kontur\responses\items
 */
class Share extends AbstractBaseItem
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