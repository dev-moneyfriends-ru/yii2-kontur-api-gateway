<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\analytics\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Маркеры автоматической проверки и числовые индикаторы
 *
 * Class Analytics
 * @package mfteam\kontur\responses\items
 */
class Analytics extends AbstractBaseItem
{
    /**
     * @var int|null
     */
    protected $q2003;

    /**
     * @var int|null
     */
    protected $q2004;

    /**
     * @var float|null
     */
    protected $s2003;

    /**
     * @var float|null
     */
    protected $s2004;

    /**
     * @var int|null
     */
    protected $q2022;

    /**
     * @var int|null
     */
    protected $q2023;

    /**
     * @var int|null
     */
    protected $q2024;

    /**
     * @var int|null
     */
    protected $q2025;

    /**
     * @var float|null
     */
    protected $s2022;

    /**
     * @var float|null
     */
    protected $s2023;

    /**
     * @var float|null
     */
    protected $s2024;

    /**
     * @var float|null
     */
    protected $s2025;

    /**
     * @var int|null
     */
    protected $q6001;

    /**
     * @var bool|null
     */
    protected $m6002;

    /**
     * @var float|null
     */
    protected $s6003;

    /**
     * @var float|null
     */
    protected $s6004;

    /**
     * @var float|null
     */
    protected $s6005;

    /**
     * @var float|null
     */
    protected $s6006;

    /**
     * @var float|null
     */
    protected $s6007;

    /**
     * @var float|null
     */
    protected $s6008;

    /**
     * @var float|null
     */
    protected $s6009;

    /**
     * @var float|null
     */
    protected $s6010;

    /**
     * @var float|null
     */
    protected $s6011;

    /**
     * @var int|null
     */
    protected $d6014;

    /**
     * @var string|null
     */
    protected $e6014;

    /**
     * @var int|null
     */
    protected $q7005;

    /**
     * @var int|null
     */
    protected $q7006;

    /**
     * @var int|null
     */
    protected $q7007;

    /**
     * @var int|null
     */
    protected $q7008;

    /**
     * @var int|null
     */
    protected $q7009;

    /**
     * @var string|null
     */
    protected $d7010;

    /**
     * @var int|null
     */
    protected $q7018;

    /**
     * @var int|null
     */
    protected $q7019;

    /**
     * @var int|null
     */
    protected $q7020;

    /**
     * @var int|null
     */
    protected $q7021;

    /**
     * @var int|null
     */
    protected $q7022;

    /**
     * @var string|null
     */
    protected $d7023;

    /**
     * @var bool|null
     */
    protected $m7023;

    /**
     * @var bool|null
     */
    protected $m7027;

    /**
     * @var int|null
     */
    protected $q8001;

    /**
     * @return int|null
     */
    public function getQ2003(): ?int
    {
        return $this->q2003;
    }

    /**
     * @return int|null
     */
    public function getQ2004(): ?int
    {
        return $this->q2004;
    }

    /**
     * @return float|null
     */
    public function getS2003(): ?float
    {
        return $this->s2003;
    }

    /**
     * @return float|null
     */
    public function getS2004(): ?float
    {
        return $this->s2004;
    }

    /**
     * @return int|null
     */
    public function getQ2022(): ?int
    {
        return $this->q2022;
    }

    /**
     * @return int|null
     */
    public function getQ2023(): ?int
    {
        return $this->q2023;
    }

    /**
     * @return int|null
     */
    public function getQ2024(): ?int
    {
        return $this->q2024;
    }

    /**
     * @return int|null
     */
    public function getQ2025(): ?int
    {
        return $this->q2025;
    }

    /**
     * @return float|null
     */
    public function getS2022(): ?float
    {
        return $this->s2022;
    }

    /**
     * @return float|null
     */
    public function getS2023(): ?float
    {
        return $this->s2023;
    }

    /**
     * @return float|null
     */
    public function getS2024(): ?float
    {
        return $this->s2024;
    }

    /**
     * @return float|null
     */
    public function getS2025(): ?float
    {
        return $this->s2025;
    }

    /**
     * @return int|null
     */
    public function getQ6001(): ?int
    {
        return $this->q6001;
    }

    /**
     * @return bool|null
     */
    public function getM6002(): ?bool
    {
        return $this->m6002;
    }

    /**
     * @return float|null
     */
    public function getS6003(): ?float
    {
        return $this->s6003;
    }

    /**
     * @return float|null
     */
    public function getS6004(): ?float
    {
        return $this->s6004;
    }

    /**
     * @return float|null
     */
    public function getS6005(): ?float
    {
        return $this->s6005;
    }

    /**
     * @return float|null
     */
    public function getS6006(): ?float
    {
        return $this->s6006;
    }

    /**
     * @return float|null
     */
    public function getS6007(): ?float
    {
        return $this->s6007;
    }

    /**
     * @return float|null
     */
    public function getS6008(): ?float
    {
        return $this->s6008;
    }

    /**
     * @return float|null
     */
    public function getS6009(): ?float
    {
        return $this->s6009;
    }

    /**
     * @return float|null
     */
    public function getS6010(): ?float
    {
        return $this->s6010;
    }

    /**
     * @return float|null
     */
    public function getS6011(): ?float
    {
        return $this->s6011;
    }

    /**
     * @return int|null
     */
    public function getD6014(): ?int
    {
        return $this->d6014;
    }

    /**
     * @return string|null
     */
    public function getE6014(): ?string
    {
        return $this->e6014;
    }

    /**
     * @return int|null
     */
    public function getQ7005(): ?int
    {
        return $this->q7005;
    }

    /**
     * @return int|null
     */
    public function getQ7006(): ?int
    {
        return $this->q7006;
    }

    /**
     * @return int|null
     */
    public function getQ7007(): ?int
    {
        return $this->q7007;
    }

    /**
     * @return int|null
     */
    public function getQ7008(): ?int
    {
        return $this->q7008;
    }

    /**
     * @return int|null
     */
    public function getQ7009(): ?int
    {
        return $this->q7009;
    }

    /**
     * @return string|null
     */
    public function getD7010(): ?string
    {
        return $this->d7010;
    }

    /**
     * @return int|null
     */
    public function getQ7018(): ?int
    {
        return $this->q7018;
    }

    /**
     * @return int|null
     */
    public function getQ7019(): ?int
    {
        return $this->q7019;
    }

    /**
     * @return int|null
     */
    public function getQ7020(): ?int
    {
        return $this->q7020;
    }

    /**
     * @return int|null
     */
    public function getQ7021(): ?int
    {
        return $this->q7021;
    }

    /**
     * @return int|null
     */
    public function getQ7022(): ?int
    {
        return $this->q7022;
    }

    /**
     * @return string|null
     */
    public function getD7023(): ?string
    {
        return $this->d7023;
    }

    /**
     * @return bool|null
     */
    public function getM7023(): ?bool
    {
        return $this->m7023;
    }

    /**
     * @return bool|null
     */
    public function getM7027(): ?bool
    {
        return $this->m7027;
    }

    /**
     * @return int|null
     */
    public function getQ8001(): ?int
    {
        return $this->q8001;
    }
}