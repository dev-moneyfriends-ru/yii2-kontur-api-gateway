<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\pep_search;

use mfteam\kontur\responses\AbstractBaseObject;
use mfteam\kontur\responses\items\document\DocumentHref;
use mfteam\kontur\responses\items\misc\Birthday;
use mfteam\kontur\responses\ResponseInterface;

/**
 * Поиск публичных должностных лиц
 *
 * Class PepSearchResponse
 * @package mfteam\kontur\responses\pep_search
 */
class PepSearchResponse extends AbstractBaseObject implements ResponseInterface
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
    protected $fio;

    /**
     * @var Birthday|null
     */
    protected $birthday;

    /**
     * @var string|null
     */
    protected $event;

    /**
     * @var string|null
     */
    protected $position;

    /**
     * @var DocumentHref|null
     */
    protected $document;

    /**
     * @return string|null
     */
    public function getFio(): ?string
    {
        return $this->fio;
    }

    /**
     * @return Birthday|null
     */
    public function getBirthday(): ?Birthday
    {
        return $this->birthday;
    }

    /**
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @return DocumentHref|null
     */
    public function getDocument(): ?DocumentHref
    {
        return $this->document;
    }

    /**
     * @param array $data
     */
    public function setBirthday(array $data = []): void
    {
        $this->birthday = new Birthday($data);
    }

    /**
     * @param array $data
     */
    public function setDocument(array $data = []): void
    {
        $this->document = new DocumentHref($data);
    }
}
