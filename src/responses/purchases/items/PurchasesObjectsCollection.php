<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 16:01
 */

namespace mfteam\kontur\responses\purchases\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Объекты закупки
 *
 * Class PurchasesObjectsCollection
 * @package mfteam\kontur\responses\req\items
 *
 * @method PurchaseObject[] getItems()
 */
class PurchasesObjectsCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PurchaseObject::class, $data);

        parent::setItems($data);
    }
}
