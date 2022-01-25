<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 13:35
 */

namespace mfteam\kontur\responses\req;

use mfteam\kontur\responses\AbstractKonturBaseResponse;
use mfteam\kontur\responses\items\brief\BriefReportItem;
use mfteam\kontur\responses\items\ContactPhonesItem;

/**
 * Ответ Базовые реквизиты
 *
 * Class KonturReqResponse
 * @package mfteam\kontur\responses
 *
 * @property-read null|ULReqItem $uL
 */
class KonturReqResponse extends AbstractKonturBaseResponse
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
     * @var ULReqItem|null
     */
    protected $UL;

    /**
     * @var BriefReportItem|null
     */
    protected $briefReport;

    /**
     * @var ContactPhonesItem|null
     */
    protected $contactPhones;

    /**
     * @return BriefReportItem|null
     */
    public function getBriefReport(): ?BriefReportItem
    {
        return $this->briefReport;
    }

    /**
     * @return ContactPhonesItem|null
     */
    public function getContactPhones(): ?ContactPhonesItem
    {
        return $this->contactPhones;
    }

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
     * @return ULReqItem|null
     */
    public function getUL(): ?ULReqItem
    {
        return $this->UL;
    }

    /**
     * @param array $data
     */
    public function setUL(array $data = []): void
    {
        $this->UL = new ULReqItem($data);
    }

    /**
     * @param array $data
     */
    public function setBriefReport(array $data = []): void
    {
        $this->briefReport = new BriefReportItem($data);
    }

    /**
     * @param array $data
     */
    public function setContactPhones(array $data = []): void
    {
        $this->contactPhones = new ContactPhonesItem($data);
    }
}
