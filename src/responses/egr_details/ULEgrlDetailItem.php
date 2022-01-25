<?php

namespace mfteam\kontur\responses\egrl_details;

use mfteam\kontur\responses\AbstractKonturBaseItem;
use mfteam\kontur\responses\items\misc\RegBodyItem;
use mfteam\kontur\responses\items\person\PersonFounderFLCollection;
use mfteam\kontur\responses\items\person\PersonFounderForeignCollection;
use mfteam\kontur\responses\items\person\PersonFounderULCollection;

/**
 * Информация о юридическом лице
 *
 * Class ULEgrlDetailItem
 * @package mfteam\kontur\responses\egrl_details
 */
class ULEgrlDetailItem extends AbstractKonturBaseItem
{
    /**
     * @var string|null
     */
    protected $okpo;

    /**
     * @var string|null
     */
    protected $pfrRegNumber;

    /**
     * @var string|null
     */
    protected $fssRegNumber;

    /**
     * @var string|null
     */
    protected $fomsRegNumber;

    /**
     * @var ActivitiesEgrlDetailItem|null
     */
    protected $activities;

    /**
     * @var RegInfoEgrlDetailItem|null
     */
    protected $regInfo;

    /**
     * @var RegBodyItem|null
     */
    protected $nalogRegBody;

    /**
     * @var RegBodyItem|null
     */
    protected $regBody;

    /**
     * @var StatedCapitalEgrlDetailItem|null
     */
    protected $statedCapital;

    /**
     * @var PersonFounderFLCollection|null
     */
    protected $foundersFL;

    /**
     * @var PersonFounderULCollection|null
     */
    protected $foundersUL;

    /**
     * @var PersonFounderForeignCollection|null
     */
    protected $foundersForeign;

    /**
     * @var string|null
     */
    protected $fomsRegNumber;
}
