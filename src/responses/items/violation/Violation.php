<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 16:34
 */

namespace mfteam\kontur\responses\items\violation;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Проверка
 *
 * Class Violation
 * @package mfteam\kontur\responses\items\violation
 */
class Violation extends AbstractBaseItem
{
    /**
     * @var int|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var string|null
     */
    protected $noteInjuction;

    /**
     * @var string|null
     */
    protected $appointmentDate;

    /**
     * @var string|null
     */
    protected $deadline;

    /**
     * @var string|null
     */
    protected $execution;

    /**
     * @var bool|null
     */
    protected $isRefused;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @return string|null
     */
    public function getNoteInjuction(): ?string
    {
        return $this->noteInjuction;
    }

    /**
     * @return string|null
     */
    public function getAppointmentDate(): ?string
    {
        return $this->appointmentDate;
    }

    /**
     * @return string|null
     */
    public function getDeadline(): ?string
    {
        return $this->deadline;
    }

    /**
     * @return string|null
     */
    public function getExecution(): ?string
    {
        return $this->execution;
    }

    /**
     * @return bool|null
     */
    public function getIsRefused(): ?bool
    {
        return $this->isRefused;
    }
}
