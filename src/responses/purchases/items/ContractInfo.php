<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 16:19
 */

namespace mfteam\kontur\responses\purchases\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\Price;

/**
 * Информация о контракте/договоре
 *
 * Class ContractInfo
 * @package mfteam\kontur\responses\req\items
 */
class ContractInfo extends AbstractBaseItem
{
    /** @var string  */
    const CASH_ACCOUNT = 'cashAccount';

    /** @var string  */
    const BANK_GUARANTEE = 'bankGuarantee';

    /**
     * @var string|null
     */
    protected $number;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $executionDate;

    /**
     * @var string|null
     */
    protected $enforcement;

    /**
     * @var string|null
     */
    protected $stage;

    /**
     * @var string|null
     */
    protected $canceledReason;

    /**
     * @var bool|null
     */
    protected $partiallyExecuted;

    /**
     * @var Price|null
     */
    protected $price;

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string|null $number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null $date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string|null
     */
    public function getExecutionDate(): ?string
    {
        return $this->executionDate;
    }

    /**
     * @param string|null $executionDate
     */
    public function setExecutionDate(?string $executionDate): void
    {
        $this->executionDate = $executionDate;
    }

    /**
     * @return string|null
     */
    public function getEnforcement(): ?string
    {
        return $this->enforcement;
    }

    /**
     * @param string|null $enforcement
     */
    public function setEnforcement(?string $enforcement): void
    {
        $this->enforcement = $enforcement;
    }

    /**
     * @return string|null
     */
    public function getStage(): ?string
    {
        return $this->stage;
    }

    /**
     * @param string|null $stage
     */
    public function setStage(?string $stage): void
    {
        $this->stage = $stage;
    }

    /**
     * @return string|null
     */
    public function getCanceledReason(): ?string
    {
        return $this->canceledReason;
    }

    /**
     * @param string|null $canceledReason
     */
    public function setCanceledReason(?string $canceledReason): void
    {
        $this->canceledReason = $canceledReason;
    }

    /**
     * @return bool|null
     */
    public function getPartiallyExecuted(): ?bool
    {
        return $this->partiallyExecuted;
    }

    /**
     * @param bool|null $partiallyExecuted
     */
    public function setPartiallyExecuted(?bool $partiallyExecuted): void
    {
        $this->partiallyExecuted = $partiallyExecuted;
    }

    /**
     * @return Price|null
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * @param array $data
     */
    public function setPrice(array $data = []): void
    {
        $this->price = new Price($data);
    }
}
