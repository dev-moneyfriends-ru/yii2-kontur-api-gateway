<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\responses\AbstractKonturBaseItem;

/**
 * Обременение
 *
 * Class PledgeItem
 * @package mfteam\kontur\responses\items\misc
 */
class PledgeItem extends AbstractKonturBaseItem
{
    /**
     * @var string|null
     */
    protected $duration;

    /**
     * @var PledgeULItem|null
     */
    protected $pledgeeUL;

    /**
     * @var PledgeFLItem|null
     */
    protected $pledgeeFL;

    /**
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @return PledgeULItem|null
     */
    public function getPledgeeUL(): ?PledgeULItem
    {
        return $this->pledgeeUL;
    }

    /**
     * @return PledgeFLItem|null
     */
    public function getPledgeeFL(): ?PledgeFLItem
    {
        return $this->pledgeeFL;
    }

    /**
     * @param array $data
     */
    public function setPledgeeFL(array $data = []): void
    {
        $this->pledgeeFL = new PledgeFLItem($data);
    }

    /**
     * @param array $data
     */
    public function setPledgeeUL(array $data = []): void
    {
        $this->pledgeeUL = new PledgeULItem($data);
    }
}