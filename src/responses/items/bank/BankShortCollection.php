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
 * Банки, в которых были найдены счета
 *
 * Class BankShortCollection
 * @package mfteam\kontur\responses\items\bank
 *
 * @method BankShort[] getItems()
 */
class BankShortCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(BankShort::class, $data);

        parent::setItems($data);
    }
}
