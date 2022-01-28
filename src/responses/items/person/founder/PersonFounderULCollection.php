<?php

namespace mfteam\kontur\responses\items\person\founder;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Список Учредителей ЮЛ
 *
 * Class PersonFounderULCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonFounderUL[] getItems()
 */
class PersonFounderULCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonFounderUL::class, $data);

        parent::setItems($data);
    }
}
