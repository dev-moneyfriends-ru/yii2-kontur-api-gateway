<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Коллекция контрактов
 *
 * Class LesseeContractCollection
 * @package mfteam\kontur\responses\lessee\items
 *
 * @method LesseeContract[] getItems()
 */
class LesseeContractCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(LesseeContract::class, $data);
        parent::setItems($data);
    }
}
