<?php

namespace mfteam\kontur\responses\items\person\shareholder;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Акционеры - остальные
 *
 * Class PersonShareholderOtherCollection
 * @package mfteam\kontur\responses\items\person
 * 
 * @method PersonShareholderOther[] getItems()
 */
class PersonShareholderOtherCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonShareholderOther::class, $data);

        parent::setItems($data);
    }
}
