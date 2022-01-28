<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 11:35
 */

namespace mfteam\kontur\responses\items\message;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Судебное решение
 *
 * Class DecisionMessage
 * @package mfteam\kontur\responses\items\message
 */
class DecisionMessage extends AbstractBaseItem
{
    /**
     * @var float|null
     */
    protected $typeId;

    /**
     * @var string|null
     */
    protected $typeName;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return float|null
     */
    public function getTypeId(): ?float
    {
        return $this->typeId;
    }

    /**
     * @return string|null
     */
    public function getTypeName(): ?string
    {
        return $this->typeName;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}
