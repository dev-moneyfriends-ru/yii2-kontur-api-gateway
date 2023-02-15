<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 16:36
 */

namespace mfteam\kontur\responses\items\violation;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Нарушения
 *
 * Class ViolationCollection
 * @package mfteam\kontur\responses\items\violation
 *
 * @method Violation[] getItems()
 */
class ViolationCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Violation::class, $data);

        parent::setItems($data);
    }
}
