<?php

namespace mfteam\kontur\responses\items\person\owner;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Список владельцев - ФЛ
 *
 * Class PersonOwnerFLCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonOwnerFL[] getItems()
 */
class PersonOwnerFLCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonOwnerFL::class, $data);

        parent::setItems($data);
    }
}
