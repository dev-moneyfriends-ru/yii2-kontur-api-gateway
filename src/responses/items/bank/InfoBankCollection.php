<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 11:58
 */

namespace mfteam\kontur\responses\items\bank;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Информация о найденных счетах: источник, дата, номер счета
 *
 * Class InfoBankCollection
 * @package mfteam\kontur\responses\items\bank
 *
 * @method InfoBank[] getItems()
 */
class InfoBankCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(InfoBank::class, $data);

        parent::setItems($data);
    }
}
