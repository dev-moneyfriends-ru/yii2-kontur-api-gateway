<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\req;

use mfteam\kontur\responses\AbstractKonturBaseCollection;
use mfteam\kontur\responses\items\person\PersonPositionItem;
use yii\helpers\ArrayHelper;

/**
 * Лица, имеющие право подписи без доверенности (руководители)
 *
 * Class HeadsCollectionItemResponse
 * @package mfteam\kontur\responses\items
 *
 * @method PersonPositionItem[] getItems()
 */
class HeadsReqCollection extends AbstractKonturBaseCollection
{
    /**
     * @param array $data
     *
     * @return void
     */
    public function setItems(array $data = [])
    {
        $items = ArrayHelper::getColumn($data, function (array $datum) {
            return new PersonPositionItem($datum);
        });

        parent::setItems($items);
    }
}
