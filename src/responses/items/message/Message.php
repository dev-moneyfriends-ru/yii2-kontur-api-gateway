<?php

namespace mfteam\kontur\responses\items\message;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Сообщение о банкротстве
 *
 * Class Message
 * @package mfteam\kontur\responses\items\message
 */
class Message extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $messageType;

    /**
     * @var string|null
     */
    protected $pubDate;

    /**
     * @var DecisionMessage|null
     */
    protected $decision;

    /**
     * @var AnnulationMessage|null
     */
    protected $annulation;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }

    /**
     * @return string|null
     */
    public function getPubDate(): ?string
    {
        return $this->pubDate;
    }

    /**
     * @return DecisionMessage|null
     */
    public function getDecision(): ?DecisionMessage
    {
        return $this->decision;
    }

    /**
     * @return AnnulationMessage|null
     */
    public function getAnnulation(): ?AnnulationMessage
    {
        return $this->annulation;
    }

    /**
     * @param array $data
     */
    public function setDecision(array $data = []): void
    {
        $this->decision = new DecisionMessage($data);
    }

    /**
     * @param array $data
     */
    public function setAnnulation(array $data = []): void
    {
        $this->annulation = new AnnulationMessage($data);
    }
}
