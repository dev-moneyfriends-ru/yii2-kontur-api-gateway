<?php

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Коды
 *
 * Class CodeCollection
 * @package mfteam\kontur\responses\items\misc
 *
 * @method Code[] getItems()
 */
class CodeCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Code::class, $data);

        parent::setItems($data);
    }
}
