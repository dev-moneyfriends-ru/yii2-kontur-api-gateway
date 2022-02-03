<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:51
 */

namespace mfteam\kontur\responses\buh\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Бухгалтерская форма
 *
 * Class ItemBuhForm
 * @package mfteam\kontur\responses\buh\items
 */
class ItemBuhForm extends AbstractBaseItem
{
    /** @var int Код итоговой суммы баланса */
    const CODE_BALANCE = 1300;

    /** @var int Код выручки с продаж */
    const CODE_PROFIT = 2110;

    /** @var int Код чистой прибыли */
    const CODE_NET_PROFIT = 2410;

    /**
     * @var int|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $startValue;

    /**
     * @var int|null
     */
    protected $endValue;

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getStartValue(): ?int
    {
        return $this->startValue;
    }

    /**
     * @return int|null
     */
    public function getEndValue(): ?int
    {
        return $this->endValue;
    }

    /**
     * Разность начальной и конечной суммы
     *
     * @return int
     */
    public function getDiffValue(): int
    {
        $startAmount = $this->startValue ?? 0;
        $endAmount = $this->endValue ?? 0;

        return round($endAmount - $startAmount);
    }
}
