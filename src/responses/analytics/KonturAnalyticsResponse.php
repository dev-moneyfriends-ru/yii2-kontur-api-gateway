<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 16:23
 */

namespace mfteam\kontur\responses\analytics;

use mfteam\kontur\responses\AbstractKonturBaseData;

/**
 * Расширенная аналитика
 *
 * Class KonturAnalyticsData
 * @package mfteam\kontur\responses
 */
class KonturAnalyticsResponse extends AbstractKonturBaseData
{
    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @var string|null
     */
    protected $focusHref;

    /**
     * @var AnalyticsItem|null
     */
    protected $analytics;

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
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    /**
     * @return string|null
     */
    public function getFocusHref(): ?string
    {
        return $this->focusHref;
    }

    /**
     * @return AnalyticsItem|null
     */
    public function getAnalytics(): ?AnalyticsItem
    {
        return $this->analytics;
    }

    /**
     * @param array $data
     */
    public function setAnalytics(array $data = []): void
    {
        $this->analytics = new AnalyticsItem($data);
    }
}