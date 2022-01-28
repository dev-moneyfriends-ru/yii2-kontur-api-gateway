<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:51
 */

namespace mfteam\kontur\responses\buh\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Бухгалтерская форма
 *
 * Class ItemBuhForm
 * @package mfteam\kontur\responses\buh\items
 */
class ItemBuhForm extends AbstractBaseItem
{
    /**
     * @var int|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $startValue;

    /**
     * @var int|null
     */
    protected $endValue;

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getStartValue(): ?int
    {
        return $this->startValue;
    }

    /**
     * @return int|null
     */
    public function getEndValue(): ?int
    {
        return $this->endValue;
    }
}
