<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 12:15
 */

namespace mfteam\kontur\responses\items\person\shareholder;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Акционер - ФЛ
 *
 * Class PersonShareholderFL
 * @package mfteam\kontur\responses\items\person
 */
class PersonShareholderFL extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $fio;

    /**
     * @var string|null
     */
    protected $address;

    /**
     * @var float|null
     */
    protected $votingSharesPercent;

    /**
     * @var string|null
     */
    protected $capitalSharesPercent;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @return string|null
     */
    public function getFio(): ?string
    {
        return $this->fio;
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
     * @return string|null
     */
    public function getCapitalSharesPercent(): ?string
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
