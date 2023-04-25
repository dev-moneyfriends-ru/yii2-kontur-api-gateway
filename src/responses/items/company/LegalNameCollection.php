<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;
use mfteam\kontur\responses\items\person\PersonPosition;

/**
 * История изменений названия организации
 * Class LegalNameCollection
 * @package mfteam\kontur\responses\items\company
 */
class LegalNameCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(LegalName::class, $data);

        parent::setItems($data);
    }
}
