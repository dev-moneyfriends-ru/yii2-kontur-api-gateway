<?php

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Доля участия - сокращенная
 *
 * Class ShareShort
 * @package mfteam\kontur\responses\items
 */
class ShareShort extends AbstractBaseItem
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
}