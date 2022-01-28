<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 11:57
 */

namespace mfteam\kontur\responses\items\bank;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Информация о найденных счетах: источник, дата, номер счета
 *
 * Class InfoBank
 * @package mfteam\kontur\responses\items\bank
 */
class InfoBank extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $source;

    /**
     * @var string|null
     */
    protected $updateDate;

    /**
     * @var string|null
     */
    protected $accountNumber;

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @return string|null
     */
    public function getUpdateDate(): ?string
    {
        return $this->updateDate;
    }

    /**
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
}
