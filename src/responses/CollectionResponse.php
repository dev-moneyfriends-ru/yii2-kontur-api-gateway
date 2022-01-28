<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 13:31
 */

namespace mfteam\kontur\responses;

use mfteam\kontur\helpers\KonturResponseHelper;
use ReflectionClass;
use ReflectionException;
use yii\base\InvalidArgumentException;

/**
 * Коллекция моделей ответа
 *
 * Class KonturApiCollection
 * @package mfteam\kontur\responses
 *
 * @method ResponseInterface[] getItems()
 */
class CollectionResponse extends AbstractBaseCollection
{
    /**
     * @var string
     */
    private $responseClassName;

    /**
     * @@inheritDoc
     *
     * @param string $responseClassName
     * @param array $data
     */
    public function __construct(string $responseClassName, array $data = [])
    {
        $this::setResponseClass($responseClassName);

        parent::__construct($data);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $responseClassName = $this->responseClassName;
        $data = KonturResponseHelper::instanceRecursiveData($responseClassName, $data);

        parent::setItems($data);
    }

    /**
     * Установка класса ответ
     *
     * @param string $responseClassName
     *
     * @return void
     */
    private function setResponseClass(string $responseClassName)
    {
        try {
            $ref = new ReflectionClass($responseClassName);
            $inst = $ref->newInstanceWithoutConstructor();
        } catch (ReflectionException $exception) {
            throw new InvalidArgumentException("$responseClassName not exist");
        }

        if (($inst instanceof ResponseInterface) === false) {
            throw new InvalidArgumentException('ResponseClassName must be instance of KonturResponseInterface.');
        }

        $this->responseClassName = $responseClassName;
    }
}
