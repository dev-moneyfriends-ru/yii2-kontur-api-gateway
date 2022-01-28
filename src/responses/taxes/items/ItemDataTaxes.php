<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 20:26
 */

namespace mfteam\kontur\responses\taxes\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Уплаченные налоги, сборы - наименования и суммы
 *
 * Class ItemDataTaxes
 * @package mfteam\kontur\responses\taxes\items
 */
class ItemDataTaxes extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var float|null
     */
    protected $sum;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return float|null
     */
    public function getSum(): ?float
    {
        return $this->sum;
    }
}
