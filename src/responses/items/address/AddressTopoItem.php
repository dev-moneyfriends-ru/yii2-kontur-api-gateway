<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\address;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Элемент адреса
 *
 * Class AddressTopoItemResponse
 * @package mfteam\kontur\responses\items
 */
class AddressTopoItem extends AbstractKonturBaseItem
{
    /**
     * @var string|null
     */
    protected $topoShortName;

    /**
     * @var string|null
     */
    protected $topoFullName;

    /**
     * @var string|null
     */
    protected $topoValue;

    /**
     * @return string|null
     */
    public function getTopoShortName(): ?string
    {
        return $this->topoShortName;
    }

    /**
     * @return string|null
     */
    public function getTopoFullName(): ?string
    {
        return $this->topoFullName;
    }

    /**
     * @return string|null
     */
    public function getTopoValue(): ?string
    {
        return $this->topoValue;
    }
}