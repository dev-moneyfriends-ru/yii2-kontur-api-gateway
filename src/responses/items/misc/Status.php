<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Статус
 *
 * Class Status
 * @package mfteam\kontur\responses\items
 */
class Status extends AbstractBaseItem
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