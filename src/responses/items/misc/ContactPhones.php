<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Контактные телефоны из Контур.Справочника
 *
 * Class ContactPhones
 * @package mfteam\kontur\responses\items
 */
class ContactPhones extends AbstractBaseItem
{
    /**
     * @var int|null
     */
    protected $count;

    /**
     * @var array
     */
    protected $phones = [];

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @return array
     */
    public function getPhones(): array
    {
        return $this->phones;
    }
}
