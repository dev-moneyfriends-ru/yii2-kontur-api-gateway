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
 * Запрос по дате
 *
 * Class DateRequest
 * @package mfteam\kontur\requests
 */
class DateRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $date;

    /**
     * @param string $date
     */
    public function __construct(string $date)
    {
        $this->setDate($date);
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        if (empty($date) === true) {
            throw new InvalidValueException('Date can not to be empty');
        }

        $this->date = $date;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'date' => $this->date,
        ];
    }
}
