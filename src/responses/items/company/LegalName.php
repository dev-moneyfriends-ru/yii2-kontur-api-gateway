<?php


namespace mfteam\kontur\responses\items\company;


use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Наименование юридического лица
 * Class LegalName
 * @package mfteam\kontur\responses\items\company
 */
class LegalName extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $short;
    /**
     * @var string|null
     */
    protected $full;
    /**
     * @var string|null
     */
    protected $readable;
    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getShort(): ?string
    {
        return $this->short;
    }

    /**
     * @param string|null $short
     */
    public function setShort(?string $short): void
    {
        $this->short = $short;
    }

    /**
     * @return string|null
     */
    public function getFull(): ?string
    {
        return $this->full;
    }

    /**
     * @param string|null $full
     */
    public function setFull(?string $full): void
    {
        $this->full = $full;
    }

    /**
     * @return string|null
     */
    public function getReadable(): ?string
    {
        return $this->readable;
    }

    /**
     * @param string|null $readable
     */
    public function setReadable(?string $readable): void
    {
        $this->readable = $readable;
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
