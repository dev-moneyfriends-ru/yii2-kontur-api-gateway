<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 17:07
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Участник сделки
 *
 * Class CompanyParticipant
 * @package mfteam\kontur\responses\items\company
 */
class CompanyParticipant extends AbstractBaseItem
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
    protected $kpp;

    /**
     * @var bool|null
     */
    protected $isWinner;

    /**
     * @var bool|null
     */
    protected $hasContract;

    /**
     * @var bool|null
     */
    protected $isNotAdmitted;

    /**
     * @return bool|null
     */
    public function getIsWinner(): ?bool
    {
        return $this->isWinner;
    }

    /**
     * @return bool|null
     */
    public function getHasContract(): ?bool
    {
        return $this->hasContract;
    }

    /**
     * @return bool|null
     */
    public function getIsNotAdmitted(): ?bool
    {
        return $this->isNotAdmitted;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
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
    public function getKpp(): ?string
    {
        return $this->kpp;
    }
}
