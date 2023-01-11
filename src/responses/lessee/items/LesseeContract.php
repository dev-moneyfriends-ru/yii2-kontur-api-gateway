<?php

declare(strict_types=1);

namespace mfteam\kontur\responses\lessee\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\document\Contract;
use mfteam\kontur\responses\items\misc\DatePeriod;

/**
 * Договор лизинга со стороны лизингополучателя
 *
 * Class LesseeContract
 * @package mfteam\kontur\responses\lessee\items
 */
class LesseeContract extends AbstractBaseItem
{
    /**
     * Номер договора
     *
     * @var string|null
     */
    protected $number;

    /**
     * Дата договора
     *
     * @var string|null
     */
    protected $contractDate;

    /**
     * Период лизинга
     *
     * @var DatePeriod|null
     */
    protected $leasePeriod;

    /**
     * Информация о завершении
     *
     * @var LesseeTermination|null
     */
    protected $termination;

    /**
     * Сведения о лизингодателях
     *
     * @var LessorsCollection|null
     */
    protected $lessors;

    /**
     * Предметы лизинга
     *
     * @var LesseeSubjectCollection|null
     */
    protected $subjects;

    /**
     * Признак договора сублизинга
     *
     * @var bool
     */
    protected $isSubleaseContract =  false;

    /**
     * Основной договор. Указан, если договор сублизинга
     *
     * @var Contract|null
     */
    protected $mainContract;

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
    public function getContractDate(): ?string
    {
        return $this->contractDate;
    }

    /**
     * @return DatePeriod|null
     */
    public function getLeasePeriod(): ?DatePeriod
    {
        return $this->leasePeriod;
    }

    /**
     * @return LesseeTermination|null
     */
    public function getTermination(): ?LesseeTermination
    {
        return $this->termination;
    }

    /**
     * @return LessorsCollection|null
     */
    public function getLessors(): ?LessorsCollection
    {
        return $this->lessors;
    }

    /**
     * @return LesseeSubjectCollection|null
     */
    public function getSubjects(): ?LesseeSubjectCollection
    {
        return $this->subjects;
    }

    /**
     * @return bool
     */
    public function isSubleaseContract(): bool
    {
        return $this->isSubleaseContract;
    }

    /**
     * @return Contract|null
     */
    public function getMainContract(): ?Contract
    {
        return $this->mainContract;
    }

    /**
     * @param array $data
     */
    public function setLeasePeriod(array $data = []): void
    {
        $this->leasePeriod = new DatePeriod($data);
    }

    /**
     * @param array $data
     */
    public function setTermination(array $data = []): void
    {
        $this->termination = new LesseeTermination($data);
    }

    /**
     * @param array $data
     */
    public function setLessors(array $data = []): void
    {
        $this->lessors = new LessorsCollection($data);
    }

    /**
     * @param array $data
     */
    public function setSubjects(array $data = []): void
    {
        $this->subjects = new LesseeSubjectCollection($data);
    }

    /**
     * @param array $data
     */
    public function setMainContract(array $data = []): void
    {
        $this->mainContract = new Contract($data);
    }
}