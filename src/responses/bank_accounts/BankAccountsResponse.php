<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 11:45
 */

namespace mfteam\kontur\responses\bank_accounts;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\items\bank\BankShortCollection;

/**
 * Банки, в которых ранее были найдены счета организации
 *
 * Class BankAccountsResponse
 * @package mfteam\kontur\responses\bank_accounts
 */
class BankAccountsResponse extends AbstractCompanyResponse
{
    /**
     * @var BankShortCollection|null
     */
    protected $banks;

    /**
     * @return BankShortCollection|null
     */
    public function getBanks(): ?BankShortCollection
    {
        return $this->banks;
    }

    /**
     * @param array $data
     */
    public function setBanks(array $data = []): void
    {
        $this->banks = new BankShortCollection($data);
    }
}
