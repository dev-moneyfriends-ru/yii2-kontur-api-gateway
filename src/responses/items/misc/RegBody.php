<?php

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Сведения о постановке на учет
 *
 * Class RegBody
 * @package mfteam\kontur\responses\egrl_detail
 */
class RegBody extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $nalogCode;

    /**
     * @var string|null
     */
    protected $nalogName;

    /**
     * @var string|null
     */
    protected $nalogRegDate;

    /**
     * @var string|null
     */
    protected $nalogRegAddress;

    /**
     * @var string|null
     */
    protected $kpp;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getNalogCode(): ?string
    {
        return $this->nalogCode;
    }

    /**
     * @return string|null
     */
    public function getNalogName(): ?string
    {
        return $this->nalogName;
    }

    /**
     * @return string|null
     */
    public function getNalogRegDate(): ?string
    {
        return $this->nalogRegDate;
    }

    /**
     * @return string|null
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
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
    public function getNalogRegAddress(): ?string
    {
        return $this->nalogRegAddress;
    }
}
