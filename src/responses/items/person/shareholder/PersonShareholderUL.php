<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 12:17
 */

namespace mfteam\kontur\responses\items\person\shareholder;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Акционер - ЮЛ
 *
 * Class PersonShareholderUL
 * @package mfteam\kontur\responses\items\person
 */
class PersonShareholderUL extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $fullName;

    /**
     * @var string|null
     */
    protected $address;

    /**
     * @var float|null
     */
    protected $votingSharesPercent;

    /**
     * @var float|null
     */
    protected $capitalSharesPercent;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    /**
     * @return string|null
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return float|null
     */
    public function getVotingSharesPercent(): ?float
    {
        return $this->votingSharesPercent;
    }

    /**
     * @return float|null
     */
    public function getCapitalSharesPercent(): ?float
    {
        return $this->capitalSharesPercent;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
}
