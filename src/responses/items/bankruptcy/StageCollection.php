<?php

namespace mfteam\kontur\responses\items\bankruptcy;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Стадии банкротства
 *
 * Class StageCollection
 * @package mfteam\kontur\responses\items\bankruptcy
 *
 * @method Stage[] getItems()
 */
class StageCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Stage::class, $data);

        parent::setItems($data);
    }
}
