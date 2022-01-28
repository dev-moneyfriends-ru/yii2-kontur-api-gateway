<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 11:47
 */

namespace mfteam\kontur\responses\items\bank;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Банки, в которых были найдены счета
 *
 * Class BankShort
 * @package mfteam\kontur\responses\items\bank
 */
class BankShort extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $bik;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var InfoBankCollection|null
     */
    protected $info;

    /**
     * @return string|null
     */
    public function getBik(): ?string
    {
        return $this->bik;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return InfoBankCollection|null
     */
    public function getInfo(): ?InfoBankCollection
    {
        return $this->info;
    }

    /**
     * @param array $data
     */
    public function setInfo(array $data = []): void
    {
        $this->info = new InfoBankCollection($data);
    }
}
