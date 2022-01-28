<?php

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Нотариус
 *
 * Class Notarization
 * @package mfteam\kontur\responses\items\pledge
 */
class Notarization extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $fio;

    /**
     * @var string|null
     */
    protected $innfl;

    /**
     * @var string|null
     */
    protected $contractNumber;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getFio(): ?string
    {
        return $this->fio;
    }

    /**
     * @return string|null
     */
    public function getInnfl(): ?string
    {
        return $this->innfl;
    }

    /**
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}