<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 18:06
 */

namespace mfteam\kontur\responses\beneficial_owners\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Состояние капитала
 *
 * Class StatedCapitalBeneficialOwners
 * @package mfteam\kontur\responses\beneficial_owners\items
 */
class StatedCapitalBeneficialOwners extends AbstractBaseItem
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
