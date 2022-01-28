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
 * Сертификат
 *
 * Class Certificate
 * @package mfteam\kontur\responses\items\document
 */
class Certificate extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $serialNumber;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}
