<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\Notarization;

/**
 * Залогодержатель — ЮЛ
 *
 * Class PledgeUL
 * @package mfteam\kontur\responses\items\pledge
 */
class PledgeUL extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var Notarization|null
     */
    protected $notarization;

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
