<?php

namespace mfteam\kontur\responses\items\person;

use mfteam\kontur\responses\AbstractKonturBaseCollection;
use yii\helpers\ArrayHelper;

/**
 * Список учредителей ФЛ
 *
 * Class PersonFounderFLCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonFounderFLItem[] getItems()
 */
class PersonFounderFLCollection extends AbstractKonturBaseCollection
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
