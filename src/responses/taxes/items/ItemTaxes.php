<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 20:07
 */

namespace mfteam\kontur\responses\taxes\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Уплаченные налоги и сборы
 *
 * Class ItemTaxes
 * @package mfteam\kontur\responses\taxes\items
 */
class ItemTaxes extends AbstractBaseItem
{
    /**
     * @var int|null
     */
    protected $year;

    /**
     * @var ItemDataTaxesCollection|null
     */
    protected $data;

    /**
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @return ItemDataTaxesCollection|null
     */
    public function getData(): ?ItemDataTaxesCollection
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data = []): void
    {
        $this->data = new ItemDataTaxesCollection($data);
    }
}
