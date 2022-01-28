<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:27
 */

namespace mfteam\kontur\responses\items\person;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Должностные лица
 *
 * Class PersonPositionCollection
 * @package mfteam\kontur\responses\items\person
 *
 * @method PersonPosition[] getItems()
 */
class PersonPositionCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonPosition::class, $data);

        parent::setItems($data);
    }
}
