<?php

namespace mfteam\kontur\responses\items\person\shareholder;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Акционеры - ФЛ
 *
 * Class PersonShareholderFLCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonShareholderFL[] getItems()
 */
class PersonShareholderFLCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonShareholderFL::class, $data);

        parent::setItems($data);
    }
}
