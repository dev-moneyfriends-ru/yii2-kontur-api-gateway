<?php

namespace mfteam\kontur\responses\items\activity;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Вид деятельности краткий
 *
 * Class ActivityShort
 * @package mfteam\kontur\responses\items
 */
class ActivityShort extends AbstractBaseItem
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
}
