<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:47
 */

namespace mfteam\kontur\responses\taxes\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Уплаченные налоги и сборы
 *
 * Class TaxesCollection
 * @package mfteam\kontur\responses\buh\items
 *
 * @method ItemTaxes[] getItems()
 */
class TaxesCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(ItemTaxes::class, $data);

        parent::setItems($data);
    }
}
