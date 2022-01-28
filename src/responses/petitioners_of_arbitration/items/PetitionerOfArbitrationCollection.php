<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:20
 */

namespace mfteam\kontur\responses\petitioners_of_arbitration;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Истцы
 *
 * Class PetitionerOfArbitrationCollection
 * @package mfteam\kontur\responses\petitioners_of_arbitration
 *
 * @method PetitionerOfArbitration[] getItems()
 */
class PetitionerOfArbitrationCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PetitionerOfArbitration::class, $data);

        parent::setItems($data);
    }
}
