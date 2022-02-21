<?php

/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 15:59
 */

namespace mfteam\kontur\responses\purchases;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\purchases\items\PurchasesCollection;

/**
 * Закупки заказчика
 *
 * Class PurchasesOfCustomerResponse
 * @package mfteam\kontur\responses\purchases
 */
class PurchasesOfCustomerResponse extends AbstractCompanyResponse
{
    /**
     * @var PurchasesCollection|null
     */
    protected $purchasesOfCustomer;

    /**
     * @return PurchasesCollection|null
     */
    public function getPurchasesOfCustomer(): ?PurchasesCollection
    {
        return $this->purchasesOfCustomer;
    }

    /**
     * @param array $data
     */
    public function setPurchasesOfCustomer(array $data = []): void
    {
        $this->purchasesOfCustomer = new PurchasesCollection($data);
    }
}
