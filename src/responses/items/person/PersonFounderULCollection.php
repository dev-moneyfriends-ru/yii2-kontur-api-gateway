<?php

namespace mfteam\kontur\responses\items\person;

use mfteam\kontur\responses\AbstractKonturBaseCollection;
use yii\helpers\ArrayHelper;

/**
 * Список Учредителей ЮЛ
 *
 * Class PersonFounderULCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonFounderULItem[] getItems()
 */
class PersonFounderULCollection extends AbstractKonturBaseCollection
{
    /**
     * @param array $data
     *
     * @return void
     */
    public function setItems(array $data = [])
    {
        $items = ArrayHelper::getColumn($data, function (array $datum) {
            return new PersonFounderFLItem($datum);
        });

        parent::setItems($items);
    }
}
