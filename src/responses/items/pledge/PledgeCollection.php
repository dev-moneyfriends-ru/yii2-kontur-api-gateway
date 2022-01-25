<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\responses\AbstractKonturBaseCollection;
use yii\helpers\ArrayHelper;

/**
 * Сведения об обременении доли участника
 *
 * Class PledgeCollection
 * @package mfteam\kontur\responses\items\misc
 *
 * @method PledgeItem[] getItems()
 */
class PledgeCollection extends AbstractKonturBaseCollection
{
    /**
     * @param array $data
     *
     * @return void
     */
    public function setItems(array $data = [])
    {
        $items = ArrayHelper::getColumn($data, function (array $datum) {
            return new PledgeItem($datum);
        });

        parent::setItems($items);
    }
}
