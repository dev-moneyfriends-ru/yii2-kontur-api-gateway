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
 * Владелец - иностранная компания
 *
 * Class PersonOwnerForeign
 * @package mfteam\kontur\responses\items\person\owner
 */
class PersonOwnerForeign extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $country;

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
    public function getCountry(): ?string
    {
        return $this->country;
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
