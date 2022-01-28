<?php

namespace mfteam\kontur\responses\items\activity;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Виды деятельности
 *
 * Class ActivityCollection
 * @package mfteam\kontur\responses\items\activity
 *
 * @method Activity[] getItems()
 */
class ActivityCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Activity::class, $data);

        parent::setItems($data);
    }
}
