<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;
use mfteam\kontur\responses\items\address\Address;

/**
 * История Управляющие компании
 * Class ManagementCompanyCollection
 * @package mfteam\kontur\responses\items\company
 */
class ManagementCompanyCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(ManagementCompany::class, $data);

        parent::setItems($data);
    }
}
