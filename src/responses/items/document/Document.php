<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 10:16
 */

namespace mfteam\kontur\responses\items\document;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Документ
 *
 * Class Document
 * @package mfteam\kontur\responses\items\document
 */
class Document extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}