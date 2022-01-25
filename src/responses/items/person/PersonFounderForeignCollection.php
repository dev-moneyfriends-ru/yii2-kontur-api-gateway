<?php

namespace mfteam\kontur\responses\items\person;

use mfteam\kontur\responses\AbstractKonturBaseCollection;
use yii\helpers\ArrayHelper;

/**
 * Учредители - иностранные компании
 *
 * Class PersonFounderForeignCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonFounderForeignItem[] getItems()
 */
class PersonFounderForeignCollection extends AbstractKonturBaseCollection
{
    /**
     * @param array $data
     *
     * @return void
     */
    public function setItems(array $data = [])
    {
        $items = ArrayHelper::getColumn($data, function (array $datum) {
            return new PersonFounderForeignItem($datum);
        });

        parent::setItems($items);
    }
}
