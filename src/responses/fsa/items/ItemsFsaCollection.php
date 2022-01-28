<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:50
 */

namespace mfteam\kontur\responses\fsa\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Сертификаты и декларации соответствия юр. лица (ИП), выступающего в роли заявителя
 *
 * Class ItemsFsaCollection
 * @package mfteam\kontur\responses\fsa\items
 *
 * @method ItemsFsa[] getItems()
 */
class ItemsFsaCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(ItemsFsa::class, $data);

        parent::setItems($data);
    }
}
