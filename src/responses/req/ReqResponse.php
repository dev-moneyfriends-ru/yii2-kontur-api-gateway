<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 13:35
 */

namespace mfteam\kontur\responses\req;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\items\brief\BriefReport;
use mfteam\kontur\responses\items\misc\CountContactPhones;
use mfteam\kontur\responses\req\items\IPReq;
use mfteam\kontur\responses\req\items\ULReq;

/**
 * Ответ Базовые реквизиты
 *
 * Class ReqResponse
 * @package mfteam\kontur\responses
 *
 * @property ULReq|null $uL
 * @property null|IPReq $iP
 */
class ReqResponse extends AbstractCompanyResponse
{
    /**
     * @var ULReq|null
     */
    protected $UL;

    /**
     * @var IPReq|null
     */
    protected $IP;

    /**
     * @var BriefReport|null
     */
    protected $briefReport;

    /**
     * @var CountContactPhones|null
     */
    protected $contactPhones;

    /**
     * @return BriefReport|null
     */
    public function getBriefReport(): ?BriefReport
    {
        return $this->briefReport;
    }

    /**
     * @return CountContactPhones|null
     */
    public function getContactPhones(): ?CountContactPhones
    {
        return $this->contactPhones;
    }

    /**
     * @return ULReq|null
     */
    public function getUL(): ?ULReq
    {
        return $this->UL;
    }

    /**
     * @param array $data
     */
    public function setUL(array $data = []): void
    {
        $this->UL = new ULReq($data);
    }

    /**
     * @param array $data
     */
    public function setBriefReport(array $data = []): void
    {
        $this->briefReport = new BriefReport($data);
    }

    /**
     * @param array $data
     */
    public function setContactPhones(array $data = []): void
    {
        $this->contactPhones = new CountContactPhones($data);
    }

    /**
     * @return IPReq|null
     */
    public function getIP(): ?IPReq
    {
        return $this->IP;
    }

    /**
     * @param array $data
     */
    public function setIP(array $data = []): void
    {
        $this->IP = new IPReq($data);
    }
}
