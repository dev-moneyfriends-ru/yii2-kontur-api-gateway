<?php

namespace mfteam\kontur\responses\items\pledge;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Обременение
 *
 * Class Pledge
 * @package mfteam\kontur\responses\items\misc
 */
class Pledge extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $duration;

    /**
     * @var PledgeUL|null
     */
    protected $pledgeeUL;

    /**
     * @var PledgeFL|null
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
     * @return PledgeUL|null
     */
    public function getPledgeeUL(): ?PledgeUL
    {
        return $this->pledgeeUL;
    }

    /**
     * @return PledgeFL|null
     */
    public function getPledgeeFL(): ?PledgeFL
    {
        return $this->pledgeeFL;
    }

    /**
     * @param array $data
     */
    public function setPledgeeFL(array $data = []): void
    {
        $this->pledgeeFL = new PledgeFL($data);
    }

    /**
     * @param array $data
     */
    public function setPledgeeUL(array $data = []): void
    {
        $this->pledgeeUL = new PledgeUL($data);
    }
}