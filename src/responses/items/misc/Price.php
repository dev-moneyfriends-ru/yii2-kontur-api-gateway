<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 16:06
 */

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Сумма
 *
 * Class Price
 * @package mfteam\kontur\responses\items\misc
 */
class Price extends AbstractBaseItem
{
    /**
     * @var float|null
     */
    protected $sum;

    /**
     * @var string|null
     */
    protected $currencyCode;

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
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
}
