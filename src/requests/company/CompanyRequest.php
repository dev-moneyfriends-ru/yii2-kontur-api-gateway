<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 16:25
 */

namespace mfteam\kontur\requests\company;

use yii\base\InvalidValueException;

/**
 * Запрос по компании
 *
 * Class CompanyRequest
 * @package mfteam\kontur\requests
 */
class CompanyRequest implements CompanyRequestInterface
{
    /**
     * @var string
     */
    private $inn;

    /**
     * @var string|null
     */
    private $ogrn;

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
     * @return CompanyRequest
     */
    public static function byInn(string $value): CompanyRequest
    {
        $instance = new self();
        $instance->setInn($value);

        return $instance;
    }

    /**
     * Поиск по ОГРН
     *
     * @param string $value
     *
     * @return CompanyRequest
     */
    public static function byOgrn(string $value): CompanyRequest
    {
        $instance = new self();
        $instance->setOgrn($value);

        return $instance;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'inn' => $this->inn,
            'ogrn' => $this->ogrn,
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

        $this->inn = $value;
    }

    /**
     * @param string $value
     */
    public function setOgrn(string $value): void
    {
        if (empty($value) === true) {
            throw new InvalidValueException('OGRN can not to be empty');
        }

        $this->ogrn = $value;
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
