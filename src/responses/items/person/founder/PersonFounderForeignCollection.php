<?php

namespace mfteam\kontur\responses\items\person\founder;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Учредители - иностранные компании
 *
 * Class PersonFounderForeignCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonFounderForeign[] getItems()
 */
class PersonFounderForeignCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonFounderForeign::class, $data);

        parent::setItems($data);
    }
}
