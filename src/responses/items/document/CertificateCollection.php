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
 * Сертификаты
 *
 * Class CertificateCollection
 * @package mfteam\kontur\responses\items\document
 *
 * @method Certificate[] getItems()
 */
class CertificateCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Certificate::class, $data);

        parent::setItems($data);
    }
}
