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
 * Сводная информация из экспресс-отчета
 *
 * Class BriefReportSummaryItemResponse
 * @package mfteam\kontur\responses\items
 */
class BriefReportSummaryItem extends AbstractKonturBaseItem
{
    /**
     * @var bool|null
     */
    protected $greenStatements;

    /**
     * @var bool|null
     */
    protected $yellowStatements;

    /**
     * @return bool|null
     */
    public function getGreenStatements(): ?bool
    {
        return $this->greenStatements;
    }

    /**
     * @return bool|null
     */
    public function getYellowStatements(): ?bool
    {
        return $this->yellowStatements;
    }
}