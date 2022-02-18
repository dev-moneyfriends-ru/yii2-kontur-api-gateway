<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 16:02
 */

namespace mfteam\kontur\responses\req\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\company\CompanyCustomerCollection;
use mfteam\kontur\responses\items\company\CompanyParticipantCollection;
use mfteam\kontur\responses\items\misc\Price;

/**
 * Закупка
 *
 * Class Purchase
 * @package mfteam\kontur\responses\req\items
 */
class Purchase extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $number;

    /**
     * @var string|null
     */
    protected $stateDescription;

    /**
     * @var string|null
     */
    protected $selectionTypeDescription;

    /**
     * @var string|null
     */
    protected $topicDescription;

    /**
     * @var string|null
     */
    protected $publicationDate;

    /**
     * @var Price|null
     */
    protected $startPrice;

    /**
     * @var Price|null
     */
    protected $winnerPrice;

    /**
     * @var CompanyCustomerCollection|null
     */
    protected $customers;

    /**
     * @var CompanyParticipantCollection|null
     */
    protected $participants;

    /**
     * @var ContractInfo|null
     */
    protected $contractInfo;

    /**
     * @var PurchasesObjectsCollection|null
     */
    protected $purchaseObjects;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @return string|null
     */
    public function getStateDescription(): ?string
    {
        return $this->stateDescription;
    }

    /**
     * @return string|null
     */
    public function getSelectionTypeDescription(): ?string
    {
        return $this->selectionTypeDescription;
    }

    /**
     * @return string|null
     */
    public function getTopicDescription(): ?string
    {
        return $this->topicDescription;
    }

    /**
     * @return string|null
     */
    public function getPublicationDate(): ?string
    {
        return $this->publicationDate;
    }

    /**
     * @return Price|null
     */
    public function getStartPrice(): ?Price
    {
        return $this->startPrice;
    }

    /**
     * @return Price|null
     */
    public function getWinnerPrice(): ?Price
    {
        return $this->winnerPrice;
    }

    /**
     * @return CompanyCustomerCollection|null
     */
    public function getCustomers(): ?CompanyCustomerCollection
    {
        return $this->customers;
    }

    /**
     * @return CompanyParticipantCollection|null
     */
    public function getParticipants(): ?CompanyParticipantCollection
    {
        return $this->participants;
    }

    /**
     * @return ContractInfo|null
     */
    public function getContractInfo(): ?ContractInfo
    {
        return $this->contractInfo;
    }

    /**
     * @return PurchasesObjectsCollection|null
     */
    public function getPurchaseObjects(): ?PurchasesObjectsCollection
    {
        return $this->purchaseObjects;
    }

    /**
     * @param array $data
     */
    public function setStartPrice(array $data = []): void
    {
        $this->startPrice = new Price($data);
    }

    /**
     * @param array $data
     */
    public function setWinnerPrice(array $data = []): void
    {
        $this->winnerPrice = new Price($data);
    }

    /**
     * @param array $data
     */
    public function setCustomers(array $data = []): void
    {
        $this->customers = new CompanyCustomerCollection($data);
    }

    /**
     * @param array $data
     */
    public function setParticipants(array $data = []): void
    {
        $this->participants = new CompanyParticipantCollection($data);
    }

    /**
     * @param array $data
     */
    public function setContractInfo(array $data = []): void
    {
        $this->contractInfo = new ContractInfo($data);
    }

    /**
     * @param array $data
     */
    public function setPurchaseObjects(array $data = []): void
    {
        $this->purchaseObjects = new PurchasesObjectsCollection($data);
    }

    /**
     * Количество объектов
     *
     * @return int
     */
    public function getCountPurchaseObjects(): int
    {
        return $this->purchaseObjects ?
            $this
                ->purchaseObjects
                ->length() :
            0;
    }
}
