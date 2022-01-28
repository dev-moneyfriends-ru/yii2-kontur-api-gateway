<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 12:11
 */

namespace mfteam\kontur\responses\fns_blocked_bank_accounts\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Решение о блокировке
 *
 * Class BlockedAccountsInfoBank
 * @package mfteam\kontur\responses\fns_blocked_bank_accounts\items
 */
class BlockedAccountsInfoBank extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $updateDate;

    /**
     * @var int|null
     */
    protected $totalCount;

    /**
     * @var SuspensionBlockedBankAccountCollection|null
     */
    protected $suspensions;

    /**
     * @return string|null
     */
    public function getUpdateDate(): ?string
    {
        return $this->updateDate;
    }

    /**
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @return SuspensionBlockedBankAccountCollection|null
     */
    public function getSuspensions(): ?SuspensionBlockedBankAccountCollection
    {
        return $this->suspensions;
    }

    /**
     * @param array $data
     */
    public function setSuspensions(array $data = []): void
    {
        $this->suspensions = new SuspensionBlockedBankAccountCollection($data);
    }
}
