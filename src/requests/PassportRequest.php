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
 * Запрос по паспорту
 *
 * Class PassportRequest
 * @package mfteam\kontur\requests
 */
class PassportRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $passport;

    /**
     * @param string $passport
     */
    public function __construct(string $passport)
    {
        $this->setPassport($passport);
    }

    /**
     * @param string $passport
     */
    public function setPassport(string $passport): void
    {
        if (empty($passport) === true) {
            throw new InvalidValueException('Passport can not to be empty');
        }

        $this->passport = $passport;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'passportNumber' => $this->passport,
        ];
    }
}
