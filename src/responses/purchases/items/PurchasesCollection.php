<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 16:01
 */

namespace mfteam\kontur\responses\req\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Закупки
 *
 * Class PurchasesCollection
 * @package mfteam\kontur\responses\req\items
 *
 * @method Purchase[] getItems()
 */
class PurchasesCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Purchase::class, $data);

        parent::setItems($data);
    }
}
