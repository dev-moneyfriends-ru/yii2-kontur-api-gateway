<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Информация о завершении
 *
 * Class LesseeTermination
 * @package mfteam\kontur\responses\lessee\items
 */
class LesseeTermination extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $reason;

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
    public function getReason(): ?string
    {
        return $this->reason;
    }
}