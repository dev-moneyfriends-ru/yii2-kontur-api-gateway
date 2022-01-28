<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:52
 */

namespace mfteam\kontur\responses\founders_history\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Хронология изменения состава учредителей и участников
 *
 * Class FounderHistoryCollection
 * @package mfteam\kontur\responses\founders_history\items
 *
 * @method FounderHistory[] getItems()
 */
class FounderHistoryCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(FounderHistory::class, $data);

        parent::setItems($data);
    }
}
