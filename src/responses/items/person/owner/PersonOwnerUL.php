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
 * Владелец - ЮЛ
 *
 * Class PersonOwnerUL
 * @package mfteam\kontur\responses\items\person\owner
 */
class PersonOwnerUL extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $fullName;

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
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
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
