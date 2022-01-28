<?php

namespace mfteam\kontur\responses\items\bankruptcy;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Стадия банкротства
 *
 * Class Stage
 * @package mfteam\kontur\responses\items\bankruptcy
 */
class Stage extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $stage;

    /**
     * @var string|null
     */
    protected $pubDate;

    /**
     * @var string|null
     */
    protected $decisionDate;

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
    public function getStage(): ?string
    {
        return $this->stage;
    }

    /**
     * @return string|null
     */
    public function getPubDate(): ?string
    {
        return $this->pubDate;
    }

    /**
     * @return string|null
     */
    public function getDecisionDate(): ?string
    {
        return $this->decisionDate;
    }
}
