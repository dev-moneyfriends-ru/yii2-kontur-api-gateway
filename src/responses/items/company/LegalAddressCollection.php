<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;
use mfteam\kontur\responses\items\address\Address;

/**
 * История смены адресов
 * Class LegalAddressCollection
 * @package mfteam\kontur\responses\items\company
 */
class LegalAddressCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Address::class, $data);

        parent::setItems($data);
    }
}
