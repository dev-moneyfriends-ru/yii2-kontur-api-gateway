<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 16:25
 */

namespace mfteam\kontur\requests;

use yii\base\InvalidValueException;

/**
 * Запрос по ИНН
 *
 * Class KonturInnRequest
 * @package mfteam\kontur\requests
 */
class KonturInnRequest implements KonturRequestInterface
{
    /**
     * @var string
     */
    private $inn;

    /**
     * @var string
     */
    private $ogrn;

    /**
     * @var bool
     */
    private $xml = false;

    /**
     * @param string $inn
     */
    public function __construct(string $inn)
    {
        $this->setInn($inn);
    }

    /**
     * @param string $inn
     */
    public function setInn(string $inn): void
    {
        if (empty($inn) === true) {
            throw new InvalidValueException('INN can not to be empty');
        }

        $this->inn = $inn;
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
        ];
    }

    /**
     * @param string $ogrn
     */
    public function setOgrn(string $ogrn): void
    {
        $this->ogrn = $ogrn;
    }

    /**
     * @return void
     */
    public function asXml(): void
    {
        $this->xml = true;
    }
}
