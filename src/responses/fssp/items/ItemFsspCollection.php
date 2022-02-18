<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:06
 */

namespace mfteam\kontur\responses\fssp\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Исполнительные производства
 *
 * Class ItemFsspCollection
 * @package mfteam\kontur\responses\fssp\items
 *
 * @method ItemFssp[] getItems()
 */
class ItemFsspCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(ItemFssp::class, $data);

        parent::setItems($data);
    }
}
