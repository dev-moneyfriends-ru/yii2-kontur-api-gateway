<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Предметы лизинга
 *
 * Class LesseeSubjectCollection
 * @package mfteam\kontur\responses\lessee\items
 *
 * @method LesseeSubject[] getItems()
 */
class LesseeSubjectCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(LesseeSubject::class, $data);
        parent::setItems($data);
    }
}
