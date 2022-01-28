<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 15:14
 */

namespace mfteam\kontur\responses\sanctioned_persons;

use mfteam\kontur\responses\AbstractBaseObject;
use mfteam\kontur\responses\ResponseInterface;

/**
 * Вхождение ФЛ в санкционные списки
 *
 * Class SanctionedPersonsResponse
 * @package mfteam\kontur\responses\sanctioned_persons
 */
class SanctionedPersonsResponse extends AbstractBaseObject implements ResponseInterface
{
    /**
     * @var string|null
     */
    protected $fio;

    /**
     * @var string|null
     */
    protected $birthPlace;

    /**
     * @var string|null
     */
    protected $birthDate;

    /**
     * @var string|null
     */
    protected $listName;

    /**
     * @var array
     */
    protected $sanctionsPrograms = [];

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
    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @return string|null
     */
    public function getListName(): ?string
    {
        return $this->listName;
    }

    /**
     * @return array
     */
    public function getSanctionsPrograms(): array
    {
        return $this->sanctionsPrograms;
    }

}
