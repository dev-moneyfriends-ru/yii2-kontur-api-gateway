<?php

namespace mfteam\kontur\responses\egrl_details;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Сведения о регистрации
 *
 * Class RegInfoEgrlDetailItem
 * @package mfteam\kontur\responses\egrl_details
 */
class RegInfoEgrlDetailItem extends AbstractKonturBaseItem
{
    /**
     * @var string
     */
    protected $ogrnDate;

    /**
     * @var string
     */
    protected $regName;

    /**
     * @return string
     */
    public function getOgrnDate(): string
    {
        return $this->ogrnDate;
    }

    /**
     * @return string
     */
    public function getRegName(): string
    {
        return $this->regName;
    }
}
