<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:47
 */

namespace mfteam\kontur\responses\founders_history\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Хронология изменений данных организации
 *
 * Class CompanyFounderHistoryCollection
 * @package mfteam\kontur\responses\founders_history\items
 *
 * @method CompanyFounderHistory[] getItems()
 */
class CompanyFounderHistoryCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(CompanyFounderHistory::class, $data);

        parent::setItems($data);
    }
}
