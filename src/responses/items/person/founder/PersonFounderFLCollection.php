<?php

namespace mfteam\kontur\responses\items\person\founder;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Список учредителей ФЛ
 *
 * Class PersonFounderFLCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonFounderFL[] getItems()
 */
class PersonFounderFLCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonFounderFL::class, $data);

        parent::setItems($data);
    }
}
