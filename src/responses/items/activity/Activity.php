<?php

namespace mfteam\kontur\responses\items\activity;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Вид деятельности
 *
 * Class Activity
 * @package mfteam\kontur\responses\items
 */
class Activity extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $text;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}
