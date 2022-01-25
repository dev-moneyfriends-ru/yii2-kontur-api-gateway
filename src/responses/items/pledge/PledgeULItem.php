<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\responses\AbstractKonturBaseItem;
use mfteam\kontur\responses\items\misc\NotarizationItem;

/**
 * Залогодержатель — юрик
 *
 * Class PledgeULItem
 * @package mfteam\kontur\responses\items\pledge
 */
class PledgeULItem extends AbstractKonturBaseItem
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
     * @var NotarizationItem|null
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
     * @return NotarizationItem|null
     */
    public function getNotarization(): ?NotarizationItem
    {
        return $this->notarization;
    }

    /**
     * @param array $data
     */
    public function setNotarization(array $data = []): void
    {
        $this->notarization = new NotarizationItem($data);
    }
}
