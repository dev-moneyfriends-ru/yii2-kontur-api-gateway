<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 10:17
 */

namespace mfteam\kontur\responses\items\document;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Документы
 *
 * Class DocumentCollection
 * @package mfteam\kontur\responses\items\document
 *
 * @method Document[] getItems()
 */
class DocumentCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Document::class, $data);

        parent::setItems($data);
    }
}
