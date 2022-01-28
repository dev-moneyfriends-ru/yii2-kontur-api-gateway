<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:47
 */

namespace mfteam\kontur\responses\finan_values\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Автоматический финансовый анализ
 *
 * Class FinanValueCollection
 * @package mfteam\kontur\responses\buh\items
 *
 * @method FinanValue[] getItems()
 */
class FinanValueCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(FinanValue::class, $data);

        parent::setItems($data);
    }
}
