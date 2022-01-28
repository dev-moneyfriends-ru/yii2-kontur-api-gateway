<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 15:27
 */

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * День рождения
 *
 * Class Birthday
 * @package mfteam\kontur\responses\items\misc
 */
class Birthday extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $year;

    /**
     * @var string|null
     */
    protected $month;

    /**
     * @var string|null
     */
    protected $day;

    /**
     * @return string|null
     */
    public function getYear(): ?string
    {
        return $this->year;
    }

    /**
     * @return string|null
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }

    /**
     * @return string|null
     */
    public function getDay(): ?string
    {
        return $this->day;
    }
}
