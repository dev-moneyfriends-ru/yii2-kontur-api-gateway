<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 14:36
 */

namespace mfteam\kontur\responses\person_bankruptcy\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Детали внесудебного банкротства
 *
 * Class ExtrajudicialPersonBankruptcy
 * @package mfteam\kontur\responses\person_bankruptcy\itens
 */
class ExtrajudicialPersonBankruptcy extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var string|null
     */
    protected $reasonForTermination;

    /**
     * @var string|null
     */
    protected $reasonForReturn;

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @return string|null
     */
    public function getReasonForTermination(): ?string
    {
        return $this->reasonForTermination;
    }

    /**
     * @return string|null
     */
    public function getReasonForReturn(): ?string
    {
        return $this->reasonForReturn;
    }
}
