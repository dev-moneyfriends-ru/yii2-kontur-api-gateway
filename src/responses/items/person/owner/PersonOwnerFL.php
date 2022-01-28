<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 18:15
 */

namespace mfteam\kontur\responses\items\person\owner;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Владелец - ФЛ
 *
 * Class PersonOwnerFL
 * @package mfteam\kontur\responses\items\person\owner
 */
class PersonOwnerFL extends AbstractBaseItem
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
     * @var float|null
     */
    protected $share;

    /**
     * @var bool|null
     */
    protected $isAccurate;

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
     * @return float|null
     */
    public function getShare(): ?float
    {
        return $this->share;
    }

    /**
     * @return bool|null
     */
    public function getIsAccurate(): ?bool
    {
        return $this->isAccurate;
    }
}
