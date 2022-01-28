<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 17:18
 */

namespace mfteam\kontur\responses\req\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\company\CompanyIPStatus;

/**
 * Информация об индивидуальном предпринимателе
 *
 * Class IPReq
 * @package mfteam\kontur\responses\req\items
 */
class IPReq extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $fio;

    /**
     * @var string|null
     */
    protected $okpo;

    /**
     * @var string|null
     */
    protected $okato;

    /**
     * @var string|null
     */
    protected $okfs;

    /**
     * @var string|null
     */
    protected $okogu;

    /**
     * @var string|null
     */
    protected $okopf;

    /**
     * @var string|null
     */
    protected $opf;

    /**
     * @var string|null
     */
    protected $oktmo;

    /**
     * @var string|null
     */
    protected $registrationDate;

    /**
     * @var string|null
     */
    protected $dissolutionDate;

    /**
     * @var CompanyIPStatus|null
     */
    protected $status;

    /**
     * @return string|null
     */
    public function getFio(): ?string
    {
        return $this->fio;
    }

    /**
     * @return string|null
     */
    public function getOkpo(): ?string
    {
        return $this->okpo;
    }

    /**
     * @return string|null
     */
    public function getOkato(): ?string
    {
        return $this->okato;
    }

    /**
     * @return string|null
     */
    public function getOkfs(): ?string
    {
        return $this->okfs;
    }

    /**
     * @return string|null
     */
    public function getOkogu(): ?string
    {
        return $this->okogu;
    }

    /**
     * @return string|null
     */
    public function getOkopf(): ?string
    {
        return $this->okopf;
    }

    /**
     * @return string|null
     */
    public function getOpf(): ?string
    {
        return $this->opf;
    }

    /**
     * @return string|null
     */
    public function getOktmo(): ?string
    {
        return $this->oktmo;
    }

    /**
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->registrationDate;
    }

    /**
     * @return string|null
     */
    public function getDissolutionDate(): ?string
    {
        return $this->dissolutionDate;
    }

    /**
     * @return CompanyIPStatus|null
     */
    public function getStatus(): ?CompanyIPStatus
    {
        return $this->status;
    }

    /**
     * @param array $data
     */
    public function setStatus(array $data = []): void
    {
        $this->status = new CompanyIPStatus($data);
    }
}
