<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 17:07
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Заказчик
 *
 * Class CompanyCustomer
 * @package mfteam\kontur\responses\items\company
 */
class CompanyCustomer extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $kpp;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
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
    public function getKpp(): ?string
    {
        return $this->kpp;
    }
}
