<?php

namespace mfteam\kontur\responses;

/**
 * Базовая коллекция
 *
 * Class AbstractBaseCollection
 * @package mfteam\kontur\responses
 */
abstract class AbstractBaseCollection
{
    /**
     * @var AbstractBaseObject[]
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
}
