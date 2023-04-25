<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\responses\AbstractBaseItem;

/**
 * История изменения КПП
 * Class Kpp
 * @package mfteam\kontur\responses\items\company
 */
class Kpp extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $kpp;
    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }
    /**
     * @param string|null $kpp
     */
    public function setKpp(?string $kpp): void
    {
        $this->kpp = $kpp;
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
}
