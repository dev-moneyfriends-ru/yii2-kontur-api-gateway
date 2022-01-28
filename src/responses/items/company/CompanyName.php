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
 * Наименование юридического лица
 *
 * Class CompanyName
 * @package mfteam\kontur\responses\items
 */
class CompanyName extends AbstractBaseItem
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