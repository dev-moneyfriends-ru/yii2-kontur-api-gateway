<?php

namespace mfteam\kontur\responses\items\person\shareholder;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Акционеры - ЮЛ
 *
 * Class PersonShareholderULCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonShareholderUL[] getItems()
 */
class PersonShareholderULCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonShareholderUL::class, $data);

        parent::setItems($data);
    }
}
