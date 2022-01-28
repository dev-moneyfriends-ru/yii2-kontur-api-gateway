<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\brief;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Экспресс-отчет по контрагенту
 *
 * Class BriefReport
 * @package mfteam\kontur\responses\items
 */
class BriefReport extends AbstractBaseItem
{
    /**
     * @var BriefReportSummary|null
     */
    protected $summary;

    /**
     * @var string|null
     */
    protected $href;

    /**
     * @return BriefReportSummary|null
     */
    public function getSummary(): ?BriefReportSummary
    {
        return $this->summary;
    }

    /**
     * @param array $data
     */
    public function setSummary(array $data = []): void
    {
        $this->summary = new BriefReportSummary($data);
    }

    /**
     * @return string|null
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
}