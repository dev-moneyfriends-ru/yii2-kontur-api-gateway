<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 15:43
 */

namespace mfteam\kontur\responses\all_peps\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Событие, связанное с публичным должностным лицом
 *
 * Class EventAllPeps
 * @package mfteam\kontur\responses\all_peps\items
 */
class EventAllPeps extends AbstractBaseItem
{
    /** @var string */
    public const EVENT_TERMINATION_OF_AUTHORITY = 'TerminationOfAuthority';

    /** @var string */
    public const EVENT_APPOINTMENT_TO_POST = 'AppointmentToPost';

    /** @var string */
    public const EVENT_FILING_THE_DECLARATION = 'FilingTheDeclaration';

    /**
     * @var string|null
     */
    protected $event;

    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $birthDate;

    /**
     * @var string|null
     */
    protected $snils;

    /**
     * @var string|null
     */
    protected $address;
}
