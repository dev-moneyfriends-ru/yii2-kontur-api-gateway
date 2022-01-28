<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 16:31
 */

namespace mfteam\kontur\responses\inspections\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Список проверок
 *
 * Class ItemInspectionCollection
 * @package mfteam\kontur\responses\inspections\items
 *
 * @method ItemInspection[] getItems()
 */
class ItemInspectionCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(ItemInspection::class, $data);

        parent::setItems($data);
    }
}
