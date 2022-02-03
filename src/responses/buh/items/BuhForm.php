<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:45
 */

namespace mfteam\kontur\responses\buh\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Бухгалтерская форма
 *
 * Class BuhForm
 * @package mfteam\kontur\responses\buh\items
 *
 * @property-read null|int $sufficientProfitAmount
 * @property-read null|int $sufficientNetProfitAmount
 * @property-read null|int $sufficientBalanceAmount
 * @property-read null|int $sufficientBalanceEnd
 */
class BuhForm extends AbstractBaseItem
{
    /** @var string */
    public const SONO = 'SONO';

    /** @var string */
    public const SMALL = 'Small';

    /** @var string  */
    public const LARGE = 'Large';

    /**
     * @var int|null
     */
    protected $year;

    /**
     * @var string|null
     */
    protected $organizationType;

    /**
     * @var ItemBuhFormCollection|null
     */
    protected $form1;

    /**
     * @var ItemBuhFormCollection|null
     */
    protected $form2;

    /**
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @return string|null
     */
    public function getOrganizationType(): ?string
    {
        return $this->organizationType;
    }

    /**
     * @return ItemBuhFormCollection|null
     */
    public function getForm1(): ?ItemBuhFormCollection
    {
        return $this->form1;
    }

    /**
     * @return ItemBuhFormCollection|null
     */
    public function getForm2(): ?ItemBuhFormCollection
    {
        return $this->form2;
    }

    /**
     * @param array $data
     */
    public function setForm1(array $data = []): void
    {
        $this->form1 = new ItemBuhFormCollection($data);
    }

    /**
     * @param array $data
     */
    public function setForm2(array $data = []): void
    {
        $this->form2 = new ItemBuhFormCollection($data);
    }

    /**
     * Сумма итогового баланса
     *
     * @return int|null
     */
    public function getSufficientBalanceAmount(): ?int
    {
        $form = $this->form1;
        if ($form === null) {
            return null;
        }

        foreach ($form->getItems() as $item) {
            $code = (int)$item->getCode();

            if ($code === ItemBuhForm::CODE_BALANCE) {
                return $item->getDiffValue();
            }
        }

        return null;
    }

    /**
     * Сумма продаж
     *
     * @return int|null
     */
    public function getSufficientProfitAmount(): ?int
    {
        $form = $this->form2;
        if ($form === null) {
            return null;
        }

        foreach ($form->getItems() as $item) {
            $code = (int)$item->getCode();

            if ($code === ItemBuhForm::CODE_PROFIT) {
                return $item->getDiffValue();
            }
        }

        return null;
    }

    /**
     * Сумма чистой прибыли
     *
     * @return int|null
     */
    public function getSufficientNetProfitAmount(): ?int
    {
        $form = $this->form2;
        if ($form === null) {
            return null;
        }

        foreach ($form->getItems() as $item) {
            $code = (int)$item->getCode();

            if ($code === ItemBuhForm::CODE_NET_PROFIT) {
                return $item->getDiffValue();
            }
        }

        return null;
    }
}
