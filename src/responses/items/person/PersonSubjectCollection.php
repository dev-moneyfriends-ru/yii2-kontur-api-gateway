<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 9:54
 */

namespace mfteam\kontur\responses\items\person;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Субъекты
 *
 * Class PersonSubjectCollection
 * @package mfteam\kontur\responses\items\predecessor
 *
 * @method PersonSubject[] getItems()
 */
class PersonSubjectCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PersonSubject::class, $data);

        parent::setItems($data);
    }
}
