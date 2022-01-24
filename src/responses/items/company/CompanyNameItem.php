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
 * Наименование юридического лица
 *
 * Class CompanyNameItemResponse
 * @package mfteam\kontur\responses\items
 */
class CompanyNameItem extends AbstractKonturBaseItem
{
    /**
     * @var string|null
     */
    protected $short;

    /**
     * @var string|null
     */
    protected $full;

    /**
     * @var string|null
     */
    protected $readable;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getShort(): ?string
    {
        return $this->short;
    }

    /**
     * @return string|null
     */
    public function getFull(): ?string
    {
        return $this->full;
    }

    /**
     * @return string|null
     */
    public function getReadable(): ?string
    {
        return $this->readable;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}