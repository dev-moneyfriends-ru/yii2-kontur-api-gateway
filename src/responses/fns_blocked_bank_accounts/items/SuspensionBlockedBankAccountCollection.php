<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 12:19
 */

namespace mfteam\kontur\responses\fns_blocked_bank_accounts\items;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Решения о блокировке
 *
 * Class SuspensionBlockedBankAccountCollection
 * @package mfteam\kontur\responses\fns_blocked_bank_accounts\items
 *
 * @method SuspensionBlockedBankAccount[] getItems()
 */
class SuspensionBlockedBankAccountCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(SuspensionBlockedBankAccount::class, $data);

        parent::setItems($data);
    }
}
