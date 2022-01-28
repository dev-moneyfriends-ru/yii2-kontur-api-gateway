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
 * Сводная информация из экспресс-отчета
 *
 * Class BriefReportSummary
 * @package mfteam\kontur\responses\items
 */
class BriefReportSummary extends AbstractBaseItem
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
     * @var bool|null
     */
    protected $redStatements;

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

    /**
     * @return bool|null
     */
    public function getRedStatements(): ?bool
    {
        return $this->redStatements;
    }
}