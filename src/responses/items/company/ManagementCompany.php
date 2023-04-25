<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Управляющие компании
 * Class ManagementCompany
 * @package mfteam\kontur\responses\items\company
 */
class ManagementCompany extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $inn;
    /**
     * @var string|null
     */
    protected $ogrn;
    /**
     * @var string|null
     */
    protected $date;
    /**
     * @var string|null
     */
    protected $firstDate;
    /**
     * @var bool
     */
    protected $isInaccuracy;
    /**
     * @var string|null
     */
    protected $inaccuracyDate;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * @param string|null $inn
     */
    public function setInn(?string $inn): void
    {
        $this->inn = $inn;
    }

    /**
     * @return string|null
     */
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    /**
     * @param string|null $ogrn
     */
    public function setOgrn(?string $ogrn): void
    {
        $this->ogrn = $ogrn;
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
    public function getFirstDate(): ?string
    {
        return $this->firstDate;
    }

    /**
     * @param string|null $firstDate
     */
    public function setFirstDate(?string $firstDate): void
    {
        $this->firstDate = $firstDate;
    }

    /**
     * @return bool|null
     */
    public function isInaccuracy(): ?bool
    {
        return $this->isInaccuracy;
    }

    /**
     * @param bool|null $isInaccuracy
     */
    public function setIsInaccuracy(?bool $isInaccuracy): void
    {
        $this->isInaccuracy = $isInaccuracy;
    }

    /**
     * @return string|null
     */
    public function getInaccuracyDate(): ?string
    {
        return $this->inaccuracyDate;
    }

    /**
     * @param string|null $inaccuracyDate
     */
    public function setInaccuracyDate(?string $inaccuracyDate): void
    {
        $this->inaccuracyDate = $inaccuracyDate;
    }
}
