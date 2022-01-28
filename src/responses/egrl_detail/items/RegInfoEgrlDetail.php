<?php

namespace mfteam\kontur\responses\egrl_detail\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Сведения о регистрации
 *
 * Class RegInfoEgrlDetail
 * @package mfteam\kontur\responses\egrl_detail
 */
class RegInfoEgrlDetail extends AbstractBaseItem
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
