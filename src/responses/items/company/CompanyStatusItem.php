<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Статус организации
 *
 * Class StatusItemResponse
 * @package mfteam\kontur\responses\items
 */
class CompanyStatusItem extends AbstractKonturBaseItem
{
    /**
     * @var string|null
     */
    protected $statusString;

    /**
     * @return string|null
     */
    public function getStatusString(): ?string
    {
        return $this->statusString;
    }
}