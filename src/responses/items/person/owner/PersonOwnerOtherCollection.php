<?php

namespace mfteam\kontur\responses\items\person\owner;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Список владельцев - без категории
 *
 * Class PersonOwnerOtherCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonOwnerOther[] getItems()
 */
class PersonOwnerOtherCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonOwnerOther::class, $data);

        parent::setItems($data);
    }
}
