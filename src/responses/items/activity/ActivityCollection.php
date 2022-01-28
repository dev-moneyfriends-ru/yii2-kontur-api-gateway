<?php

namespace mfteam\kontur\responses\items\activity;

use mfteam\kontur\responses\AbstractKonturBaseCollection;
use yii\helpers\ArrayHelper;

/**
 * Виды деятельности
 *
 * Class ActivityCollection
 * @package mfteam\kontur\responses\items\activity
 *
 * @method ActivityItem[] getItems()
 */
class ActivityCollection extends AbstractKonturBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $items = ArrayHelper::getColumn($data, function (array $datum) {
            return new ActivityItem($datum);
        });

        parent::setItems($items);
    }
}
