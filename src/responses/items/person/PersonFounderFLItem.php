<?php

namespace mfteam\kontur\responses\items\person;

use mfteam\kontur\responses\AbstractKonturBaseItem;
use mfteam\kontur\responses\items\misc\ShareItem;
use mfteam\kontur\responses\items\pledge\PledgeCollection;

/**
 * Учредитель ФЛ
 *
 * Class CompanyPersonFounderItem
 * @package mfteam\kontur\responses\items\company
 */
class PersonFounderFLItem extends AbstractKonturBaseItem
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
     * @var ShareItem|null
     */
    protected $share;

    /**
     * @var PledgeCollection|null
     */
    protected $pledges;

    /**
     * @return ShareItem|null
     */
    public function getShare(): ?ShareItem
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
        $this->share = new ShareItem($data);
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
