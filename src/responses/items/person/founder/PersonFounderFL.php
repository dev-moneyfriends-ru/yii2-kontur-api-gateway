<?php

namespace mfteam\kontur\responses\items\person\founder;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\Share;
use mfteam\kontur\responses\items\pledge\PledgeCollection;

/**
 * Учредитель - ФЛ
 *
 * Class PersonFounderFL
 * @package mfteam\kontur\responses\items\company
 */
class PersonFounderFL extends AbstractBaseItem
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
