<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 12:18
 */

namespace mfteam\kontur\responses\fns_blocked_bank_accounts\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Решение о блокировке
 *
 * Class SuspensionBlockedBankAccount
 * @package mfteam\kontur\responses\fns_blocked_bank_accounts\items
 */
class SuspensionBlockedBankAccount extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $bik;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $number;

    /**
     * @return string|null
     */
    public function getBik(): ?string
    {
        return $this->bik;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
}
