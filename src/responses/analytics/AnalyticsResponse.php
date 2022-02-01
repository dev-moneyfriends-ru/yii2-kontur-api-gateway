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
    public function hasBankruptMark(): bool
    {
        $analytics = $this->analytics;
        if (empty($analytics) === true) {
            return false;
        }

        return true;
    }

    /**
     * Имеются признаки арбитражных дел
     *
     * @return bool
     */
    public function hasArbitrationMark(): bool
    {
        $analytics = $this->analytics;
        if (empty($analytics) === true) {
            return false;
        }

        return true;
    }
}
