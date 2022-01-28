<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:04
 */

namespace mfteam\kontur\responses\egrl_detail\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\address\AddressShort;
use mfteam\kontur\responses\items\egr\EgrRecordCollection;
use mfteam\kontur\responses\items\misc\RegBody;

/**
 * Информация об индивидуальном предпринимателе
 *
 * Class IPEgrlDetail
 * @package mfteam\kontur\responses\egrl_detail
 */
class IPEgrlDetail extends AbstractBaseItem
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
     * @var string|null
     */
    protected $okato;

    /**
     * @var AddressShort|null
     */
    protected $shortenedAddress;

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
     * @var EgrRecordCollection|null
     */
    protected $egrRecords;

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
     * @return string|null
     */
    public function getOkato(): ?string
    {
        return $this->okato;
    }

    /**
     * @return AddressShort|null
     */
    public function getShortenedAddress(): ?AddressShort
    {
        return $this->shortenedAddress;
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
     * @return EgrRecordCollection|null
     */
    public function getEgrRecords(): ?EgrRecordCollection
    {
        return $this->egrRecords;
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
    public function setActivities(array $data = []): void
    {
        $this->activities = new ActivitiesEgrlDetail($data);
    }

    /**
     * @param array $data
     */
    public function setShortenedAddress(array $data = []): void
    {
        $this->shortenedAddress = new AddressShort($data);
    }
}
