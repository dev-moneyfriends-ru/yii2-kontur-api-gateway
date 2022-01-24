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
 */
class KonturCollectionResponse
{
    /**
     * @var AbstractKonturBaseData[]
     */
    protected $items = [];

    /**
     * @param string $dataString
     * @param array $data
     */
    public function __construct(string $dataString, array $data = [])
    {
        $this->setItems($dataString, $data);
    }

    /**
     * @param string $dataString
     * @param array $data
     *
     * @return void
     */
    public function setItems(string $dataString, array $data = [])
    {
        $data = array_filter($data, function ($datum) {
            return
                is_array($datum) === true &&
                empty($datum) === false;
        });

        $items = ArrayHelper::getColumn($data, function (array $datum) use ($dataString) {
            return new $dataString($datum);
        });

        $this->items = array_values($items);
    }

    /**
     * @return AbstractKonturBaseData[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return AbstractKonturBaseData|null
     */
    public function getFirstItem(): ?AbstractKonturBaseData
    {
        return
            empty($this->items) === false ?
                current($this->items) :
                null;
    }
}