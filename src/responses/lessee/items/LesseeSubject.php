<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Предмет лизинга
 *
 * Class LesseeSubject
 * @package mfteam\kontur\responses\lessee\items
 */
class LesseeSubject extends AbstractBaseItem
{
    /**
     * Код категории
     *
     * @var string|null
     */
    protected $classifierCode;

    /**
     * Наименование категории
     *
     * @var string|null
     */
    protected $classifierName;

    /**
     * Описание предмета лизинга
     *
     * @var string|null
     */
    protected $description;

    /**
     * Идентификатор предмета лизинга
     *
     * @var string|null
     */
    protected $id;

    /**
     * @return string|null
     */
    public function getClassifierCode(): ?string
    {
        return $this->classifierCode;
    }

    /**
     * @return string|null
     */
    public function getClassifierName(): ?string
    {
        return $this->classifierName;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

}