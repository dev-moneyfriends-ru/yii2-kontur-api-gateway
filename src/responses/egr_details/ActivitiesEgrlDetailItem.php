<?php

namespace mfteam\kontur\responses\egrl_details;

use mfteam\kontur\responses\AbstractKonturBaseItem;
use mfteam\kontur\responses\items\activity\ActivityCollection;
use mfteam\kontur\responses\items\activity\ActivityItem;

/**
 * Виды деятельности
 *
 * Class ActivitiesEgrlDetailItem
 * @package mfteam\kontur\responses\egrl_details
 */
class ActivitiesEgrlDetailItem extends AbstractKonturBaseItem
{
    /**
     * @var ActivityItem|null
     */
    protected $principalActivity;

    /**
     * @var ActivityCollection|null
     */
    protected $complementaryActivities;

    /**
     * @var string|null
     */
    protected $okvedVersion;

    /**
     * @return ActivityItem|null
     */
    public function getPrincipalActivity(): ?ActivityItem
    {
        return $this->principalActivity;
    }

    /**
     * @return ActivityCollection|null
     */
    public function getComplementaryActivities(): ?ActivityCollection
    {
        return $this->complementaryActivities;
    }

    /**
     * @return string|null
     */
    public function getOkvedVersion(): ?string
    {
        return $this->okvedVersion;
    }

    /**
     * @param array $data
     */
    public function setPrincipalActivity(array $data = []): void
    {
        $this->principalActivity = new ActivityItem($data);
    }

    /**
     * @param array $data
     */
    public function setComplementaryActivities(array $data = []): void
    {
        $this->complementaryActivities = new ActivityCollection($data);
    }
}
