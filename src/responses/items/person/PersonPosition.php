<?php

namespace mfteam\kontur\responses\items\person;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\Share;

/**
 * Должностное лицо
 *
 * Class PersonPosition
 * @package mfteam\kontur\responses\items\company
 */
class PersonPosition extends AbstractBaseItem
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
    protected $date;

    /**
     * @var string|null
     */
    protected $firstDate;

    /**
     * @var Share|null
     */
    protected $share;

    /**
     * @var string|null
     */
    protected $position;

    /**
     * @return Share|null
     */
    public function getShare(): ?Share
    {
        return $this->share;
    }

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
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getFirstDate(): ?string
    {
        return $this->firstDate;
    }

    /**
     * @param array $data
     */
    public function setShare(array $data = []): void
    {
        $this->share = new Share($data);
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }
}
