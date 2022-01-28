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
 * Class BuhFormCollection
 * @package mfteam\kontur\responses\buh\items
 *
 * @method BuhForm[] getItems()
 */
class BuhFormCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(BuhForm::class, $data);

        parent::setItems($data);
    }
}
