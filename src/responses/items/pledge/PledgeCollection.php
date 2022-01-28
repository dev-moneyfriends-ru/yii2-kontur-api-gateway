<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Сведения об обременении доли участника
 *
 * Class PledgeCollection
 * @package mfteam\kontur\responses\items\misc
 *
 * @method Pledge[] getItems()
 */
class PledgeCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Pledge::class, $data);

        parent::setItems($data);
    }
}
