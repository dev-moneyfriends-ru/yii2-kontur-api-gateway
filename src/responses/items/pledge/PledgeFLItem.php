<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\responses\AbstractKonturBaseItem;
use mfteam\kontur\responses\items\misc\NotarizationItem;

/**
 * Залогодержатель — физлицо
 *
 * Class PledgeFLItem
 * @package mfteam\kontur\responses\items\pledge
 */
class PledgeFLItem extends AbstractKonturBaseItem
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
     * @var NotarizationItem|null
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
