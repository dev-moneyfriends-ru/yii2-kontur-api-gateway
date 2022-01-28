<?php

namespace mfteam\kontur\responses\egrl_detail;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\egrl_detail\items\IPEgrlDetail;
use mfteam\kontur\responses\egrl_detail\items\ULEgrlDetail;

/**
 * Расширенные сведения на основе ЕГРЮЛ/ЕГРИП
 *
 * Class EgrlDetailResponse
 * @package mfteam\kontur\responses\egrl_detail
 *
 * @property null|ULEgrlDetail $uL
 * @property null|IPEgrlDetail $iP
 */
class EgrlDetailResponse extends AbstractCompanyResponse
{
    /**
     * @var ULEgrlDetail|null
     */
    protected $UL;

    /**
     * @var IPEgrlDetail|null
     */
    protected $IP;

    /**
     * @return ULEgrlDetail|null
     */
    public function getUL(): ?ULEgrlDetail
    {
        return $this->UL;
    }

    /**
     * @return IPEgrlDetail|null
     */
    public function getIP(): ?IPEgrlDetail
    {
        return $this->IP;
    }

    /**
     * @param array $data
     */
    public function setUL(array $data = []): void
    {
        $this->UL = new ULEgrlDetail($data);
    }

    /**
     * @param array $data
     */
    public function setIP(array $data = []): void
    {
        $this->IP = new IPEgrlDetail($data);
    }
}
