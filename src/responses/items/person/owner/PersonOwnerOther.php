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
 * Владелец - без категории
 *
 * Class PersonOwnerOther
 * @package mfteam\kontur\responses\items\person\owner
 */
class PersonOwnerOther extends AbstractBaseItem
{
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
}
