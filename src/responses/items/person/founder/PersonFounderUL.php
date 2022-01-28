<?php

namespace mfteam\kontur\responses\items\person\founder;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\Share;
use mfteam\kontur\responses\items\pledge\PledgeCollection;

/**
 * Учредитель - ЮЛ
 *
 * Class PersonFounderUL
 * @package mfteam\kontur\responses\items\company
 */
class PersonFounderUL extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $fullName;

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
     * @var PledgeCollection|null
     */
    protected $pledges;

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
    public function getOgrn(): ?string
    {
        return $this->ogrn;
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
    public function getFullName(): ?string
    {
        return $this->fullName;
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
     * @return PledgeCollection|null
     */
    public function getPledges(): ?PledgeCollection
    {
        return $this->pledges;
    }

    /**
     * @param array $data
     */
    public function setPledges(array $data = []): void
    {
        $this->pledges = new PledgeCollection($data);
    }
}
