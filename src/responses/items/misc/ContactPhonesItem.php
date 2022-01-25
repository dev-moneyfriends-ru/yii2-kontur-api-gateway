<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Контактные телефоны из Контур.Справочника
 *
 * Class ContactPhonesItemResponse
 * @package mfteam\kontur\responses\items
 */
class ContactPhonesItem extends AbstractKonturBaseItem
{
    /**
     * @var int|null
     */
    protected $count;

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
}