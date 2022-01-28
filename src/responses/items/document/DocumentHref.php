<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 15:29
 */

namespace mfteam\kontur\responses\items\document;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Ссылка на документ
 *
 * Class DocumentHref
 * @package mfteam\kontur\responses\items\document
 */
class DocumentHref extends AbstractBaseItem
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
     * @var string|null
     */
    protected $href;

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

    /**
     * @return string|null
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
}
