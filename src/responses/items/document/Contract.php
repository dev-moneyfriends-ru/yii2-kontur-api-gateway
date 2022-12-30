<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 11:18
 */

namespace mfteam\kontur\responses\items\document;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Контракт
 *
 * Class Contract
 * @package mfteam\kontur\responses\items\document
 */
class Contract extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $number;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}
