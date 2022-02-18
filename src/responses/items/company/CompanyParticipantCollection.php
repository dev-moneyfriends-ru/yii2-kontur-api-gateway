<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 17:15
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Участники
 *
 * Class CompanyParticipantCollection
 * @package mfteam\kontur\responses\items\company
 *
 * @method CompanyCustomer[] getItems()
 */
class CompanyParticipantCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(CompanyParticipant::class, $data);

        parent::setItems($data);
    }
}
