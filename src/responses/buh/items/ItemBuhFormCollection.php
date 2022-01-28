<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:47
 */

namespace mfteam\kontur\responses\buh\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Бухгалтерские формы
 *
 * Class ItemBuhFormCollection
 * @package mfteam\kontur\responses\buh\items
 *
 * @method ItemBuhForm[] getItems()
 */
class ItemBuhFormCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(ItemBuhForm::class, $data);

        parent::setItems($data);
    }
}
