<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 12:53
 */

namespace mfteam\kontur\responses\person_bankruptcy;

use mfteam\kontur\responses\AbstractBaseObject;
use mfteam\kontur\responses\items\bankruptcy\StageCollection;
use mfteam\kontur\responses\items\message\MessageCollection;
use mfteam\kontur\responses\items\person\PersonManager;
use mfteam\kontur\responses\person_bankruptcy\items\ExtrajudicialPersonBankruptcy;
use mfteam\kontur\responses\ResponseInterface;

/**
 * Информация о банкротстве ФЛ
 *
 * Class PersonBankruptcyResponse
 * @package mfteam\kontur\responses\person_bankruptcy
 */
class PersonBankruptcyResponse extends AbstractBaseObject  implements ResponseInterface
{
    /**
     * @var string|null
     */
    protected $fio;

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

    /**
     * @var string|null
     */
    protected $stage;

    /**
     * @var string|null
     */
    protected $stageDate;

    /**
     * @var string|null
     */
    protected $caseNumber;

    /**
     * @var string|null
     */
    protected $lastMessageDate;

    /**
     * @var ExtrajudicialPersonBankruptcy|null
     */
    protected $extrajudicialBankruptcy;

    /**
     * @var PersonManager|null
     */
    protected $arbitrManager;

    /**
     * @var StageCollection|null
     */
    protected $stages;

    /**
     * @var MessageCollection|null
     */
    protected $messages;

    /**
     * @param array $data
     */
    public function setExtrajudicialBankruptcy(array $data = []): void
    {
        $this->extrajudicialBankruptcy = new ExtrajudicialPersonBankruptcy($data);
    }

    /**
     * @param array $data
     */
    public function setArbitrManager(array $data = []): void
    {
        $this->arbitrManager = new PersonManager($data);
    }

    /**
     * @param array $data
     */
    public function setStages(array $data = []): void
    {
        $this->stages = new StageCollection($data);
    }

    /**
     * @param array $data
     */
    public function setMessages(array $data = []): void
    {
        $this->messages = new MessageCollection($data);
    }

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
    public function getInn(): ?string
    {
        return $this->inn;
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
    public function getSnils(): ?string
    {
        return $this->snils;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getStage(): ?string
    {
        return $this->stage;
    }

    /**
     * @return string|null
     */
    public function getStageDate(): ?string
    {
        return $this->stageDate;
    }

    /**
     * @return string|null
     */
    public function getCaseNumber(): ?string
    {
        return $this->caseNumber;
    }

    /**
     * @return string|null
     */
    public function getLastMessageDate(): ?string
    {
        return $this->lastMessageDate;
    }

    /**
     * @return ExtrajudicialPersonBankruptcy|null
     */
    public function getExtrajudicialBankruptcy(): ?ExtrajudicialPersonBankruptcy
    {
        return $this->extrajudicialBankruptcy;
    }

    /**
     * @return PersonManager|null
     */
    public function getArbitrManager(): ?PersonManager
    {
        return $this->arbitrManager;
    }

    /**
     * @return StageCollection|null
     */
    public function getStages(): ?StageCollection
    {
        return $this->stages;
    }

    /**
     * @return MessageCollection|null
     */
    public function getMessages(): ?MessageCollection
    {
        return $this->messages;
    }
}
