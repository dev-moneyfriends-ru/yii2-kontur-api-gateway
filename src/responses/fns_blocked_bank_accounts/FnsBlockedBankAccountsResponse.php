<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 12:09
 */

namespace mfteam\kontur\responses\fns_blocked_bank_accounts;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\fns_blocked_bank_accounts\items\BlockedAccountsInfoBank;

/**
 * Решения налоговых органов о приостановлении операций по счетам
 *
 * Class FnsBlockedBankAccountsResponse
 * @package mfteam\kontur\responses\fns_blocked_bank_accounts
 */
class FnsBlockedBankAccountsResponse extends AbstractCompanyResponse
{
    /**
     * @var BlockedAccountsInfoBank|null
     */
    protected $blockedAccountsInfo;

    /**
     * @return BlockedAccountsInfoBank|null
     */
    public function getBlockedAccountsInfo(): ?BlockedAccountsInfoBank
    {
        return $this->blockedAccountsInfo;
    }

    /**
     * @param array $data
     */
    public function setBlockedAccountsInfo(array $data = []): void
    {
        $this->blockedAccountsInfo = new BlockedAccountsInfoBank($data);
    }
}
