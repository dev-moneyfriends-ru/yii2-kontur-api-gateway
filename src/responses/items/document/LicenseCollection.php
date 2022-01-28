<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 10:17
 */

namespace mfteam\kontur\responses\items\document;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Лицензии
 *
 * Class LicenseCollection
 * @package mfteam\kontur\responses\items\document
 *
 * @method License[] getItems()
 */
class LicenseCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(License::class, $data);

        parent::setItems($data);
    }
}
