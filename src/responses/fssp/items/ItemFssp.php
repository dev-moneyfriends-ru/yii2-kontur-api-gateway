<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:03
 */

namespace mfteam\kontur\responses\fssp\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Исполнительное производство
 *
 * Class ItemFssp
 * @package mfteam\kontur\responses\fssp\items
 */
class ItemFssp extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $officialNum;

    /**
     * @var string|null
     */
    protected $officialAggregatedNum;

    /**
     * @var string|null
     */
    protected $startDate;

    /**
     * @var float|null
     */
    protected $sum;

    /**
     * @var string|null
     */
    protected $topic;

    /**
     * @var string|null
     */
    protected $executoryDocument;

    /**
     * @var string|null
     */
    protected $executoryDocumentNumber;

    /**
     * @var string|null
     */
    protected $executoryDocumentDate;

    /**
     * @var string|null
     */
    protected $debtorName;

    /**
     * @var string|null
     */
    protected $debtorAddress;

    /**
     * @var bool|null
     */
    protected $returnedToClaimer;

    /**
     * @var bool|null
     */
    protected $cancelledBecauseOfBancruptcy;

    /**
     * @var bool|null
     */
    protected $cancelledBecauseOfDissolvement;

    /**
     * @var string|null
     */
    protected $cancelDate;

    /**
     * @var string|null
     */
    protected $bailiffDepartment;

    /**
     * @var string|null
     */
    protected $bailiffDepartmentAddress;

    /**
     * @return string|null
     */
    public function getOfficialNum(): ?string
    {
        return $this->officialNum;
    }

    /**
     * @return string|null
     */
    public function getOfficialAggregatedNum(): ?string
    {
        return $this->officialAggregatedNum;
    }

    /**
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @return float|null
     */
    public function getSum(): ?float
    {
        return $this->sum;
    }

    /**
     * @return string|null
     */
    public function getTopic(): ?string
    {
        return $this->topic;
    }

    /**
     * @return string|null
     */
    public function getExecutoryDocument(): ?string
    {
        return $this->executoryDocument;
    }

    /**
     * @return string|null
     */
    public function getExecutoryDocumentNumber(): ?string
    {
        return $this->executoryDocumentNumber;
    }

    /**
     * @return string|null
     */
    public function getExecutoryDocumentDate(): ?string
    {
        return $this->executoryDocumentDate;
    }

    /**
     * @return string|null
     */
    public function getDebtorName(): ?string
    {
        return $this->debtorName;
    }

    /**
     * @return string|null
     */
    public function getDebtorAddress(): ?string
    {
        return $this->debtorAddress;
    }

    /**
     * @return bool|null
     */
    public function getReturnedToClaimer(): ?bool
    {
        return $this->returnedToClaimer;
    }

    /**
     * @return bool|null
     */
    public function getCancelledBecauseOfBancruptcy(): ?bool
    {
        return $this->cancelledBecauseOfBancruptcy;
    }

    /**
     * @return bool|null
     */
    public function getCancelledBecauseOfDissolvement(): ?bool
    {
        return $this->cancelledBecauseOfDissolvement;
    }

    /**
     * @return string|null
     */
    public function getCancelDate(): ?string
    {
        return $this->cancelDate;
    }

    /**
     * @return string|null
     */
    public function getBailiffDepartment(): ?string
    {
        return $this->bailiffDepartment;
    }

    /**
     * @return string|null
     */
    public function getBailiffDepartmentAddress(): ?string
    {
        return $this->bailiffDepartmentAddress;
    }
}
