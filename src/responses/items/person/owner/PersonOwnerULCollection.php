<?php

namespace mfteam\kontur\responses\items\person\owner;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Список владельцев - ЮЛ
 *
 * Class PersonOwnerULCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonOwnerUL[] getItems()
 */
class PersonOwnerULCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonOwnerUL::class, $data);

        parent::setItems($data);
    }
}
