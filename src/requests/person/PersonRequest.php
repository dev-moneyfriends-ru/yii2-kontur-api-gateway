<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 16:25
 */

namespace mfteam\kontur\requests\person;

use yii\base\InvalidValueException;

/**
 * Запрос по человеку
 *
 * Class PersonRequest
 * @package mfteam\kontur\requests
 */
class PersonRequest implements PersonRequestInterface
{
    /**
     * @var string
     */
    private $innfl;

    /**
     * @var string
     */
    private $fio;

    /**
     * @var bool|null
     */
    private $xml;

    /**
     * @var bool|null
     */
    private $pdf;

    /**
     *
     */
    private function __construct()
    {
    }

    /**
     * Поиск по ИНН
     *
     * @param string $value
     *
     * @return PersonRequest
     */
    public static function byInn(string $value): PersonRequest
    {
        $instance = new self();
        $instance->setInn($value);

        return $instance;
    }

    /**
     * Поиск по ФИО
     *
     * @param string $value
     *
     * @return PersonRequest
     */
    public static function byFio(string $value): PersonRequest
    {
        $instance = new self();
        $instance->setFio($value);

        return $instance;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'innfl' => $this->innfl,
            'fio' => $this->fio,
            'xml' => $this->xml,
            'pdf' => $this->pdf,
        ];
    }

    /**
     * @param string $value
     */
    public function setInn(string $value): void
    {
        if (empty($value) === true) {
            throw new InvalidValueException('INN can not to be empty');
        }

        $this->innfl = $value;
    }

    /**
     * @param string $value
     */
    public function setFio(string $value): void
    {
        if (empty($value) === true) {
            throw new InvalidValueException('FIO can not to be empty');
        }

        $this->fio = $value;
    }

    /**
     * @return void
     */
    public function asXml(): void
    {
        $this->xml = true;
        $this->pdf = null;
    }

    /**
     * @return void
     */
    public function asPdf(): void
    {
        $this->pdf = true;
        $this->xml = null;
    }
}
