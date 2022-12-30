<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Коллекция лизингодателей
 *
 * Class LessorsCollection
 * @package mfteam\kontur\responses\lessee\items
 *
 * @method Lessor[] getItems()
 */
class LessorsCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Lessor::class, $data);
        parent::setItems($data);
    }
}
