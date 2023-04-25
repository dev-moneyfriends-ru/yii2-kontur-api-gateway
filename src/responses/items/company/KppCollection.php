<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;
use mfteam\kontur\responses\items\activity\Activity;

/**
 * Class KppCollection
 * @package mfteam\kontur\responses\items\company
 */
class KppCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Kpp::class, $data);

        parent::setItems($data);
    }
}
