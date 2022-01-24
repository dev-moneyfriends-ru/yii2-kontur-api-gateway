<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\brief;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Экспресс-отчет по контрагенту
 *
 * Class BriefReportItemResponse
 * @package mfteam\kontur\responses\items
 */
class BriefReportItem extends AbstractKonturBaseItem
{
    /**
     * @var BriefReportSummaryItem|null
     */
    protected $summary;

    /**
     * @return BriefReportSummaryItem|null
     */
    public function getSummary(): ?BriefReportSummaryItem
    {
        return $this->summary;
    }

    /**
     * @param array $data
     */
    public function setSummary(array $data = []): void
    {
        $this->summary = new BriefReportSummaryItem($data);
    }

}