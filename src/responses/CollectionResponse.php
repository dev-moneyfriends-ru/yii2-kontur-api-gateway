<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 13:31
 */

namespace mfteam\kontur\responses;

use yii\helpers\ArrayHelper;

/**
 * Коллекция моделей ответа от КонтураюФокус
 *
 * Class KonturApiCollection
 * @package mfteam\kontur\responses
 *
 * @method AbstractKonturBaseResponse[] getItems()
 */
class KonturCollectionResponse extends AbstractKonturBaseCollection
{
    /**
     * @var string
     */
    private $responseClassName;

    /**
     * @param string $responseClassName
     * @param array $data
     */
    public function __construct(string $responseClassName, array $data = [])
    {
        $this->responseClassName = $responseClassName;

        parent::__construct($data);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $responseClassName = $this->responseClassName;

        $items = ArrayHelper::getColumn($data, function (array $datum) use ($responseClassName) {
            return new $responseClassName($datum);
        });

        parent::setItems($items);
    }
}
