<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 10:32
 */

namespace mfteam\kontur\responses;

use mfteam\kontur\helpers\KonturResponseHelper;

/**
 * Арбитражные управляющие
 *
 * Class ArbitrManagerBankruptcyCollection
 * @package mfteam\kontur\responses
 *
 * @method ArbitrManagerBankruptcy[] getItems()
 */
class ArbitrManagerBankruptcyCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(ArbitrManagerBankruptcy::class, $data);

        parent::setItems($data);
    }
}
