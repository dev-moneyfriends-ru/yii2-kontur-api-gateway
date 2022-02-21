<?php

namespace mfteam\kontur\responses;

use yii\base\BaseObject;

/**
 * Базовая коллекция
 *
 * Class AbstractBaseCollection
 * @package mfteam\kontur\responses
 *
 * @property-read null|AbstractBaseObject $lastItem
 * @property-read null|AbstractBaseObject $firstItem
 */
abstract class AbstractBaseCollection extends BaseObject
{
    /**
     * @var AbstractBaseObject[]
     */
    private $items = [];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct();

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
     * @return AbstractBaseObject[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Первый элемент коллекции
     *
     * @return AbstractBaseObject|null
     */
    public function getFirstItem(): ?AbstractBaseObject
    {
        if ($this->isEmpty() === true) {
            return null;
        }

        reset($this->items);

        return current($this->items);
    }

    /**
     * Последний элемент коллекции
     *
     * @return AbstractBaseObject|null
     */
    public function getLastItem(): ?AbstractBaseObject
    {
        if ($this->isEmpty() === true) {
            return null;
        }

        reset($this->items);

        return end($this->items);
    }

    /**
     * Коллекция пустая
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->items) === true;
    }

    /**
     * Количество записей
     *
     * @return int
     */
    public function length(): int
    {
        return count($this->items);
    }

    /**
     * Список элементов в массив
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_map(
            function (AbstractBaseObject $object) {
                return $object->toArray();
            }, $this->items
        );
    }
}
