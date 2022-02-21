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
 * Закупки участника
 *
 * Class PurchasesOfParticipantResponse
 * @package mfteam\kontur\responses\purchases
 */
class PurchasesOfParticipantResponse extends AbstractCompanyResponse
{
    /**
     * @var PurchasesCollection|null
     */
    protected $purchasesOfParticipant;

    /**
     * @return PurchasesCollection|null
     */
    public function getPurchasesOfParticipant(): ?PurchasesCollection
    {
        return $this->purchasesOfParticipant;
    }

    /**
     * @param array $data
     */
    public function setPurchasesOfParticipant(array $data = []): void
    {
        $this->purchasesOfParticipant = new PurchasesCollection($data);
    }
}
