<?php

namespace mfteam\kontur\responses\egrl_detail\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\activity\ActivityCollection;
use mfteam\kontur\responses\items\activity\Activity;

/**
 * Виды деятельности
 *
 * Class ActivitiesEgrlDetail
 * @package mfteam\kontur\responses\egrl_detail
 */
class ActivitiesEgrlDetail extends AbstractBaseItem
{
    /**
     * @var Activity|null
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
     * @return Activity|null
     */
    public function getPrincipalActivity(): ?Activity
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
        $this->principalActivity = new Activity($data);
    }

    /**
     * @param array $data
     */
    public function setComplementaryActivities(array $data = []): void
    {
        $this->complementaryActivities = new ActivityCollection($data);
    }
}
