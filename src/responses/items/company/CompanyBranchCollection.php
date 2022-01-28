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
 * Филиалы и представительства
 *
 * Class CompanyBranchCollection
 * @package mfteam\kontur\responses\items\company
 *
 * @method CompanyBranch[] getItems()
 */
class CompanyBranchCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(CompanyBranch::class, $data);

        parent::setItems($data);
    }
}
