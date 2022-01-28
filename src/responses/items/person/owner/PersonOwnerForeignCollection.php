<?php

namespace mfteam\kontur\responses\items\person\owner;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Список владельцев - иностранных компаний
 *
 * Class PersonOwnerForeignCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonOwnerForeign[] getItems()
 */
class PersonOwnerForeignCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonOwnerForeign::class, $data);

        parent::setItems($data);
    }
}
