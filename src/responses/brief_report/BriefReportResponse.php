<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 17:28
 */

namespace mfteam\kontur\responses\brief_report;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\items\brief\BriefReport;

/**
 * Экспресс-отчет по контрагенту
 *
 * Class BriefReportResponse
 * @package mfteam\kontur\responses\brief_repor
 */
class BriefReportResponse extends AbstractCompanyResponse
{
    /**
     * @var BriefReport|null
     */
    protected $briefReport;

    /**
     * @return BriefReport|null
     */
    public function getBriefReport(): ?BriefReport
    {
        return $this->briefReport;
    }

    /**
     * @param array $data
     */
    public function setBriefReport(array $data = []): void
    {
        $this->briefReport = new BriefReport($data);
    }
}
