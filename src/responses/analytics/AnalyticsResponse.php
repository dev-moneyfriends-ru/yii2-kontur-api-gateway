<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 16:23
 */

namespace mfteam\kontur\responses\analytics;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\analytics\items\Analytics;

/**
 * Расширенная аналитика
 *
 * Class AnalyticsResponse
 * @package mfteam\kontur\responses
 */
class AnalyticsResponse extends AbstractCompanyResponse
{
    /**
     * @var Analytics|null
     */
    protected $analytics;

    /**
     * @return Analytics|null
     */
    public function getAnalytics(): ?Analytics
    {
        return $this->analytics;
    }

    /**
     * @param array $data
     */
    public function setAnalytics(array $data = []): void
    {
        $this->analytics = new Analytics($data);
    }

    /**
     * Имеются признаки банкротства
     *
     * @return bool
     */
    public function hasBankrupt(): bool
    {
        $analytics = $this->analytics;
        if (empty($analytics) === true) {
            return false;
        }

        return $analytics->hasBankruptMarkers();
    }

    /**
     * Является банкротом
     *
     * @return bool
     */
    public function hasFactBankrupt(): bool
    {
        $analytics = $this->analytics;
        if (empty($analytics) === true) {
            return false;
        }

        return $analytics->hasFactBankruptMarkers();
    }

    /**
     * Имеются признаки арбитражных дел
     *
     * @return bool
     */
    public function hasArbitration(): bool
    {
        $analytics = $this->analytics;
        if (empty($analytics) === true) {
            return false;
        }

        return $analytics->hasArbitrationMarkers();
    }

    /**
     * Имеются гос. контракты
     *
     * @return bool
     */
    public function hasGosContracts(): bool
    {
        $analytics = $this->analytics;

        if (empty($analytics) === true) {
            return false;
        }

        return
            $analytics->getQ4003() !== null &&
            $analytics->getQ4003() > 0;
    }

    /**
     * Вхождение в реестр недобросовестных поставщиков
     *
     * @return bool
     */
    public function intoRegisterUnscrupulous(): bool
    {
        $analytics = $this->analytics;

        if (empty($analytics) === true) {
            return false;
        }

        return (bool)$analytics->getM4001();
    }

    /**
     * Директор или основатель дисквалифицирован
     *
     * @return bool
     */
    public function hasSubjectIsDisqualified(): bool
    {
        $analytics = $this->analytics;

        if (empty($analytics) === true) {
            return false;
        }

        return (bool)$analytics->getM5008();
    }

    /**
     * Директор или основатель банкрот
     *
     * @return bool
     */
    public function hasSubjectIsBankrupt(): bool
    {
        $analytics = $this->analytics;

        if (empty($analytics) === true) {
            return false;
        }

        return (bool)$analytics->getM7026();
    }

    /**
     * Имеется задолженность по налогам
     *
     * @return bool
     */
    public function hasTaxArrears(): bool
    {
        $analytics = $this->analytics;

        if (empty($analytics) === true) {
            return false;
        }

        return (bool)$analytics->getM5004();
    }

    /**
     * Имеются аресты
     *
     * @return bool
     */
    public function hasArrest(): bool
    {
        $analytics = $this->analytics;

        if (empty($analytics) === true) {
            return false;
        }

        return (bool)$analytics->getM1004();
    }

    /**
     * Имеются исполнительные производства
     *
     * @return bool
     */
    public function hasFssp(): bool
    {
        $analytics = $this->analytics;
        if (empty($analytics) === true) {
            return false;
        }

        return
            $analytics->getQ1002() !== null &&
            $analytics->getQ1002() > 0;
    }

    /**
     * Сумма по исполнительным производствам
     *
     * @return float|int
     */
    public function getFsspAmount(): float
    {
        if ($this->hasFssp() === false) {
            return 0;
        }

        return $this
            ->analytics
            ->getS1002();
    }
}
