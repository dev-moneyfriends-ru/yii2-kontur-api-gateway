<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 16:20
 */

namespace mfteam\kontur\responses\inspections\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\violation\ViolationCollection;

/**
 * Проверка
 *
 * Class ItemInspection
 * @package mfteam\kontur\responses\inspections\items
 */
class ItemInspection extends AbstractBaseItem
{
    /** @var string  */
    public const TYPE_PLANNED = 'Planned';

    /** @var string  */
    public const TYPE_UNPLANNED = 'Unplanned';

    /** @var string  */
    public const FORM_NONE = 'None';

    /** @var string  */
    public const FORM_ON_SITE = 'OnSite';

    /** @var string  */
    public const FORM_DOCUMENTARY = 'Documentary';

    /** @var string  */
    public const FORM_ON_SITE_DOCUMENTED = 'OnSiteDocumented';

    /** @var string  */
    public const STATUS_UNKNOWN = 'UnknownResult';

    /** @var string  */
    public const STATUS_VIOLATIONS_DETECTED = 'ViolationsDetected';

    /** @var string  */
    public const STATUS_VIOLATIONS_NOT_DETECTED = 'ViolationsNotDetected';

    /** @var string  */
    public const STATUS_CANCELED = 'Canceled';

    /** @var string  */
    public const STATUS_UPCOMING = 'Upcoming';
    /**
     * @var string|null
     */
    protected $erpId;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $form;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $authorityName;

    /**
     * @var int|null
     */
    protected $year;

    /**
     * @var string|null
     */
    protected $target;

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
    protected $actDate;

    /**
     * @var string|null
     */
    protected $actAddress;

    /**
     * @var ViolationCollection|null
     */
    protected $violations;

    /**
     * @var array
     */
    protected $addresses = [];

    /**
     * @return string|null
     */
    public function getErpId(): ?string
    {
        return $this->erpId;
    }

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
    public function getForm(): ?string
    {
        return $this->form;
    }

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
    public function getAuthorityName(): ?string
    {
        return $this->authorityName;
    }

    /**
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->target;
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
    public function getActDate(): ?string
    {
        return $this->actDate;
    }

    /**
     * @return string|null
     */
    public function getActAddress(): ?string
    {
        return $this->actAddress;
    }

    /**
     * @return ViolationCollection|null
     */
    public function getViolations(): ?ViolationCollection
    {
        return $this->violations;
    }

    /**
     * @return array
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setViolations(array $data = []): void
    {
        $this->violations = new ViolationCollection($data);
    }
}
