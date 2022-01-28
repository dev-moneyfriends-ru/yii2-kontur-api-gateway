<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 14:47
 */

namespace mfteam\kontur\responses\fts_debtors;

use mfteam\kontur\responses\AbstractCompanyResponse;

/**
 * Вхождение в перечень должников ФТС
 *
 * Class FtsDebtorsResponse
 * @package mfteam\kontur\responses\fts_debtors
 */
class FtsDebtorsResponse extends AbstractCompanyResponse
{
    /**
     * @var bool|null
     */
    protected $inList;

    /**
     * @return bool|null
     */
    public function getInList(): ?bool
    {
        return $this->inList;
    }
}
