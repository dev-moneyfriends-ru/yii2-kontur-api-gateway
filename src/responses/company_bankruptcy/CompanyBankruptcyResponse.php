<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 21:01
 */

namespace mfteam\kontur\responses\company_bankruptcy;


use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\ArbitrManagerBankruptcyCollection;
use mfteam\kontur\responses\items\bankruptcy\StageCollection;
use mfteam\kontur\responses\items\message\MessageCollection;

/**
 * Информация о банкротстве ЮЛ
 *
 * Class CompanyBankruptcyResponse
 * @package mfteam\kontur\responses
 */
class CompanyBankruptcyResponse extends AbstractCompanyResponse
{
    /**
     * @var string|null
     */
    protected $stage;

    /**
     * @var string|null
     */
    protected $caseNumber;

    /**
     * @var string|null
     */
    protected $acceptanceDate;

    /**
     * @var string|null
     */
    protected $stageDate;

    /**
     * @var ArbitrManagerBankruptcyCollection|null
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
     * @return string|null
     */
    public function getStage(): ?string
    {
        return $this->stage;
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
    public function getAcceptanceDate(): ?string
    {
        return $this->acceptanceDate;
    }

    /**
     * @return string|null
     */
    public function getStageDate(): ?string
    {
        return $this->stageDate;
    }

    /**
     * @return ArbitrManagerBankruptcyCollection|null
     */
    public function getArbitrManager(): ?ArbitrManagerBankruptcyCollection
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

    /**
     * @param array $data
     */
    public function setArbitrManager(array $data = []): void
    {
        $this->arbitrManager = new ArbitrManagerBankruptcyCollection($data);
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
     * Является банкротом
     *
     * @return bool
     */
    public function isBankrupt(): bool
    {
        return
            empty($this->caseNumber) === false ||
            empty($this->acceptanceDate) === false;
    }
}
