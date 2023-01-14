<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\bank_guarantees\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Банковские гарантии
 *
 * Class BankGuaranteeCollection
 * @package mfteam\kontur\responses\bank_guarantees\items
 *
 * @method BankGuarantee[] getItems()
 */
class BankGuaranteeCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(BankGuarantee::class, $data);
        parent::setItems($data);
    }
}