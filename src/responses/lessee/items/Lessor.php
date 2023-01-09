<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Лизингодатель
 *
 * Class Lessor
 * @package mfteam\kontur\responses\lessee\items
 */
class Lessor extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @var string|null
     */
    protected $country;

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
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * @return string|null
     */
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
}