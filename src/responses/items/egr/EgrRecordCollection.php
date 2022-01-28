<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 11:57
 */

namespace mfteam\kontur\responses\items\egr;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Записи в ЕГРЮЛ
 *
 * Class EgrRecordCollection
 * @package mfteam\kontur\responses\items\egr
 *
 * @method EgrRecord[] getItems()
 */
class EgrRecordCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(EgrRecord::class, $data);

        parent::setItems($data);
    }
}
