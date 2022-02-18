<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 16:23
 */

namespace mfteam\kontur\responses\req\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\CodeCollection;

/**
 * Объект закупки
 *
 * Class PurchaseObject
 * @package mfteam\kontur\responses\req\items
 */
class PurchaseObject extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var CodeCollection|null
     */
    protected $okpds;

    /**
     * @var CodeCollection|null
     */
    protected $okpd2s;

    /**
     * @var CodeCollection|null
     */
    protected $ktrus;

    /**
     * @param array $data
     */
    public function setOkpds(array $data = []): void
    {
        $this->okpds = new CodeCollection($data);
    }

    /**
     * @param array $data
     */
    public function setOkpd2s(array $data = []): void
    {
        $this->okpd2s = new CodeCollection($data);
    }

    /**
     * @param array $data
     */
    public function setKtrus(array $data = []): void
    {
        $this->ktrus = new CodeCollection($data);
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return CodeCollection|null
     */
    public function getOkpds(): ?CodeCollection
    {
        return $this->okpds;
    }

    /**
     * @return CodeCollection|null
     */
    public function getOkpd2s(): ?CodeCollection
    {
        return $this->okpd2s;
    }

    /**
     * @return CodeCollection|null
     */
    public function getKtrus(): ?CodeCollection
    {
        return $this->ktrus;
    }
}
