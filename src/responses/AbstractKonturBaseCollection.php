<?php

namespace mfteam\kontur\responses;

use yii\base\BaseObject;

/**
 * Базовая коллекция
 *
 * Class AbstractKonturBaseCollection
 * @package mfteam\kontur\responses
 */
abstract class AbstractKonturBaseCollection
{
    /**
     * @var BaseObject[]
     */
    protected $items = [];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setItems($data);
    }

    /**
     * @param array $data
     *
     * @return void
     */
    public function setItems(array $data = [])
    {
        $items = array_filter($data);
        $this->items = array_values($items);
    }

    /**
     * @return BaseObject[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return BaseObject|null
     */
    public function getFirstItem(): ?BaseObject
    {
        return
            empty($this->items) === false ?
                current($this->items) :
                null;
    }
}
