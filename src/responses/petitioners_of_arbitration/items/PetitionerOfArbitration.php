<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:18
 */

namespace mfteam\kontur\responses\petitioners_of_arbitration\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\activity\ActivityShort;

/**
 * Истец
 *
 * Class PetitionerOfArbitration
 * @package mfteam\kontur\responses\petitioners_of_arbitration\items
 *
 * @property-read null|int $lastCaseAt
 */
class PetitionerOfArbitration extends AbstractBaseItem
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
    protected $name;

    /**
     * @var ActivityShort|null
     */
    protected $principalActivity;

    /**
     * @var float|null
     */
    protected $y3Sum;

    /**
     * @var string|null
     */
    protected $y3Count;

    /**
     * @var int|null
     */
    protected $bailiffDepartment;

    /**
     * @var string|null
     */
    protected $lastCaseDate;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return ActivityShort|null
     */
    public function getPrincipalActivity(): ?ActivityShort
    {
        return $this->principalActivity;
    }

    /**
     * @return float|null
     */
    public function getY3Sum(): ?float
    {
        return $this->y3Sum;
    }

    /**
     * @return string|null
     */
    public function getY3Count(): ?string
    {
        return $this->y3Count;
    }

    /**
     * @return int|null
     */
    public function getBailiffDepartment(): ?int
    {
        return $this->bailiffDepartment;
    }

    /**
     * @return string|null
     */
    public function getLastCaseDate(): ?string
    {
        return $this->lastCaseDate;
    }

    /**
     * @param array $data
     */
    public function setPrincipalActivity(array $data = []): void
    {
        $this->principalActivity = new ActivityShort($data);
    }

    /**
     * Дата в timestamp
     *
     * @return int|null
     */
    public function getLastCaseAt(): ?int
    {
        return $this->lastCaseDate === null ?
            null :
            strtotime($this->lastCaseDate);
    }
}
