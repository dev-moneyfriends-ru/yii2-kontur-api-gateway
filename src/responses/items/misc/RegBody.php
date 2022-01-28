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
     * @var string
     */
    protected $nalogCode;

    /**
     * @var string
     */
    protected $nalogName;

    /**
     * @var string
     */
    protected $nalogRegDate;

    /**
     * @var string
     */
    protected $nalogRegAddress;

    /**
     * @var string
     */
    protected $kpp;

    /**
     * @var string
     */
    protected $date;

    /**
     * @return string
     */
    public function getNalogCode(): string
    {
        return $this->nalogCode;
    }

    /**
     * @return string
     */
    public function getNalogName(): string
    {
        return $this->nalogName;
    }

    /**
     * @return string
     */
    public function getNalogRegDate(): string
    {
        return $this->nalogRegDate;
    }

    /**
     * @return string
     */
    public function getKpp(): string
    {
        return $this->kpp;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getNalogRegAddress(): string
    {
        return $this->nalogRegAddress;
    }
}
