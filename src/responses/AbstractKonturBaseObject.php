<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:17
 */

namespace mfteam\kontur\responses;

use yii\base\BaseObject;

/**
 * Базовый объект ответа
 *
 * Class KonturBaseResponseObject
 * @package mfteam\kontur\responses
 */
abstract class AbstractKonturBaseObject extends BaseObject
{
    /**
     * @inheritDoc
     */
    public function __construct($config = [])
    {
        parent::__construct();

        self::setBaseObjectProperties($this, $config);
    }

    /**
     * Установка значений базового объекта
     *
     * @param BaseObject $object
     * @param array $properties
     *
     * @return BaseObject
     */
    protected static function setBaseObjectProperties(BaseObject $object, array $properties): BaseObject
    {
        foreach ($properties as $name => $value) {
            if (
                $object->canSetProperty($name, false) === true &&
                empty($value) === false
            ) {
                $object->{'set' . $name}($value);
            } elseif (property_exists($object, $name) === true) {
                $object->$name = $value;
            }
        }

        return $object;
    }
}
