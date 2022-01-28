<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\Notarization;

/**
 * Залогодержатель — ФЛ
 *
 * Class PledgeFL
 * @package mfteam\kontur\responses\items\pledge
 */
class PledgeFL extends AbstractBaseItem
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
     * @var Notarization|null
     */
    protected $notarization;

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
     * @return Notarization|null
     */
    public function getNotarization(): ?Notarization
    {
        return $this->notarization;
    }

    /**
     * @param array $data
     */
    public function setNotarization(array $data = []): void
    {
        $this->notarization = new Notarization($data);
    }
}
