<?php

namespace mfteam\kontur\responses\egrl_detail\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\egr\EgrRecordCollection;
use mfteam\kontur\responses\items\misc\RegBody;
use mfteam\kontur\responses\items\person\founder\PersonFounderFLCollection;
use mfteam\kontur\responses\items\person\founder\PersonFounderForeignCollection;
use mfteam\kontur\responses\items\person\founder\PersonFounderULCollection;
use mfteam\kontur\responses\items\person\PersonSubjectCollection;

/**
 * Информация о юридическом лице
 *
 * Class ULEgrlDetail
 * @package mfteam\kontur\responses\egrl_detail
 */
class ULEgrlDetail extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $okpo;

    /**
     * @var string|null
     */
    protected $pfrRegNumber;

    /**
     * @var string|null
     */
    protected $fssRegNumber;

    /**
     * @var string|null
     */
    protected $fomsRegNumber;

    /**
     * @var ActivitiesEgrlDetail|null
     */
    protected $activities;

    /**
     * @var RegInfoEgrlDetail|null
     */
    protected $regInfo;

    /**
     * @var RegBody|null
     */
    protected $nalogRegBody;

    /**
     * @var RegBody|null
     */
    protected $regBody;

    /**
     * @var RegistrarOfShareholdersEgrlDetail|null
     */
    protected $registrarOfShareholders;

    /**
     * @var StatedCapitalEgrlDetail|null
     */
    protected $statedCapital;

    /**
     * @var PersonFounderFLCollection|null
     */
    protected $foundersFL;

    /**
     * @var PersonFounderULCollection|null
     */
    protected $foundersUL;

    /**
     * @var PersonFounderForeignCollection|null
     */
    protected $foundersForeign;

    /**
     * @var PersonSubjectCollection|null
     */
    protected $predecessors;

    /**
     * @var PersonSubjectCollection|null
     */
    protected $successors;

    /**
     * @var EgrRecordCollection|null
     */
    protected $egrRecords;

    /**
     * @var ShareholdersEgrlDetail|null
     */
    protected $shareholders;

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
    public function getPfrRegNumber(): ?string
    {
        return $this->pfrRegNumber;
    }

    /**
     * @return string|null
     */
    public function getFssRegNumber(): ?string
    {
        return $this->fssRegNumber;
    }

    /**
     * @return string|null
     */
    public function getFomsRegNumber(): ?string
    {
        return $this->fomsRegNumber;
    }

    /**
     * @return ActivitiesEgrlDetail|null
     */
    public function getActivities(): ?ActivitiesEgrlDetail
    {
        return $this->activities;
    }

    /**
     * @return RegInfoEgrlDetail|null
     */
    public function getRegInfo(): ?RegInfoEgrlDetail
    {
        return $this->regInfo;
    }

    /**
     * @return RegBody|null
     */
    public function getNalogRegBody(): ?RegBody
    {
        return $this->nalogRegBody;
    }

    /**
     * @return RegBody|null
     */
    public function getRegBody(): ?RegBody
    {
        return $this->regBody;
    }

    /**
     * @return RegistrarOfShareholdersEgrlDetail|null
     */
    public function getRegistrarOfShareholders(): ?RegistrarOfShareholdersEgrlDetail
    {
        return $this->registrarOfShareholders;
    }

    /**
     * @return StatedCapitalEgrlDetail|null
     */
    public function getStatedCapital(): ?StatedCapitalEgrlDetail
    {
        return $this->statedCapital;
    }

    /**
     * @return PersonFounderFLCollection|null
     */
    public function getFoundersFL(): ?PersonFounderFLCollection
    {
        return $this->foundersFL;
    }

    /**
     * @return PersonFounderULCollection|null
     */
    public function getFoundersUL(): ?PersonFounderULCollection
    {
        return $this->foundersUL;
    }

    /**
     * @return PersonFounderForeignCollection|null
     */
    public function getFoundersForeign(): ?PersonFounderForeignCollection
    {
        return $this->foundersForeign;
    }

    /**
     * @return PersonSubjectCollection|null
     */
    public function getPredecessors(): ?PersonSubjectCollection
    {
        return $this->predecessors;
    }

    /**
     * @return PersonSubjectCollection|null
     */
    public function getSuccessors(): ?PersonSubjectCollection
    {
        return $this->successors;
    }

    /**
     * @return EgrRecordCollection|null
     */
    public function getEgrRecords(): ?EgrRecordCollection
    {
        return $this->egrRecords;
    }

    /**
     * @return ShareholdersEgrlDetail|null
     */
    public function getShareholders(): ?ShareholdersEgrlDetail
    {
        return $this->shareholders;
    }

    /**
     * @param array $data
     */
    public function setActivities(array $data = []): void
    {
        $this->activities = new ActivitiesEgrlDetail($data);
    }

    /**
     * @param array $data
     */
    public function setRegInfo(array $data = []): void
    {
        $this->regInfo = new RegInfoEgrlDetail($data);
    }

    /**
     * @param array $data
     */
    public function setNalogRegBody(array $data = []): void
    {
        $this->nalogRegBody = new RegBody($data);
    }

    /**
     * @param array $data
     */
    public function setRegBody(array $data = []): void
    {
        $this->regBody = new RegBody($data);
    }

    /**
     * @param array $data
     */
    public function setRegistrarOfShareholders(array $data = []): void
    {
        $this->registrarOfShareholders = new RegistrarOfShareholdersEgrlDetail($data);
    }

    /**
     * @param array $data
     */
    public function setStatedCapital(array $data = []): void
    {
        $this->statedCapital = new StatedCapitalEgrlDetail($data);
    }

    /**
     * @param array $data
     */
    public function setFoundersFL(array $data = []): void
    {
        $this->foundersFL = new PersonFounderFLCollection($data);
    }

    /**
     * @param array $data
     */
    public function setFoundersUL(array $data = []): void
    {
        $this->foundersUL = new PersonFounderULCollection($data);
    }

    /**
     * @param array $data
     */
    public function setFoundersForeign(array $data = []): void
    {
        $this->foundersForeign = new PersonFounderForeignCollection($data);
    }

    /**
     * @param array $data
     */
    public function setPredecessors(array $data = []): void
    {
        $this->predecessors = new PersonSubjectCollection($data);
    }

    /**
     * @param array $data
     */
    public function setSuccessors(array $data = []): void
    {
        $this->successors = new PersonSubjectCollection($data);
    }

    /**
     * @param array $data
     */
    public function setEgrRecords(array $data = []): void
    {
        $this->egrRecords = new EgrRecordCollection($data);
    }

    /**
     * @param array $data
     */
    public function setShareholders(array $data = []): void
    {
        $this->shareholders = new ShareholdersEgrlDetail($data);
    }
}
