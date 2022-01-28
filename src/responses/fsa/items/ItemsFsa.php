<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:41
 */

namespace mfteam\kontur\responses\fsa\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\product\ManufacturerShort;
use mfteam\kontur\responses\items\product\ProductShort;

/**
 * Сертификат и декларация соответствия юр. лица (ИП), выступающего в роли заявителя
 *
 * Class ItemsFsa
 * @package mfteam\kontur\responses\fsa\items
 */
class ItemsFsa extends AbstractBaseItem
{
    /** @var string */
    public const TYPE_CERTIFICATE = 'Certificate';

    /** @var string */
    public const TYPE_DECLARATION = 'Declaration';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $detailedType;

    /**
     * @var string|null
     */
    protected $number;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var ProductShort|null
     */
    protected $product;

    /**
     * @var string|null
     */
    protected $applicantRole;

    /**
     * @var string|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var ManufacturerShort|null
     */
    protected $manufacturer;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getDetailedType(): ?string
    {
        return $this->detailedType;
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return ProductShort|null
     */
    public function getProduct(): ?ProductShort
    {
        return $this->product;
    }

    /**
     * @return string|null
     */
    public function getApplicantRole(): ?string
    {
        return $this->applicantRole;
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
     * @return ManufacturerShort|null
     */
    public function getManufacturer(): ?ManufacturerShort
    {
        return $this->manufacturer;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setProduct(array $data = []): void
    {
        $this->product = new ProductShort($data);
    }

    /**
     * @param array $data
     * @return void
     */
    public function setManufacturer(array $data = []): void
    {
        $this->manufacturer = new ManufacturerShort($data);
    }
}
