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
 * Сведения о долях владения
 *
 * Class PeriodFounderHistoryCollection
 * @package mfteam\kontur\responses\founders_history\items
 *
 * @method PeriodFounderHistory[] getItems()
 */
class PeriodFounderHistoryCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(PeriodFounderHistory::class, $data);

        parent::setItems($data);
    }
}
