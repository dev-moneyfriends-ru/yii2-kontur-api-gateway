<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 11:51
 */

namespace mfteam\kontur\responses\items\egr;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\document\CertificateCollection;
use mfteam\kontur\responses\items\document\DocumentCollection;

/**
 * Запись в ЕГРЮЛ
 *
 * Class EgrRecord
 * @package mfteam\kontur\responses\items\egr
 */
class EgrRecord extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $grn;

    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $isInvalid;

    /**
     * @var string|null
     */
    protected $invalidSince;

    /**
     * @var string|null
     */
    protected $regName;

    /**
     * @var string|null
     */
    protected $regCode;

    /**
     * @var DocumentCollection|null
     */
    protected $documents;

    /**
     * @var CertificateCollection|null
     */
    protected $certificates;

    /**
     * @return string|null
     */
    public function getGrn(): ?string
    {
        return $this->grn;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return bool|null
     */
    public function getIsInvalid(): ?bool
    {
        return $this->isInvalid;
    }

    /**
     * @return string|null
     */
    public function getInvalidSince(): ?string
    {
        return $this->invalidSince;
    }

    /**
     * @return string|null
     */
    public function getRegName(): ?string
    {
        return $this->regName;
    }

    /**
     * @return string|null
     */
    public function getRegCode(): ?string
    {
        return $this->regCode;
    }

    /**
     * @return DocumentCollection|null
     */
    public function getDocuments(): ?DocumentCollection
    {
        return $this->documents;
    }

    /**
     * @return CertificateCollection|null
     */
    public function getCertificates(): ?CertificateCollection
    {
        return $this->certificates;
    }

    /**
     * @param array $data
     */
    public function setCertificates(array $data = []): void
    {
        $this->certificates = new CertificateCollection($data);
    }

    /**
     * @param array $data
     */
    public function setDocuments(array $data = []): void
    {
        $this->documents = new DocumentCollection($data);
    }
}
