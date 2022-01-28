<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 17:09
 */

namespace mfteam\kontur\responses\items\address;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Не формализованный адрес
 *
 * Class AddressForeign
 * @package mfteam\kontur\responses\items\address
 */
class AddressForeign extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $countryName;

    /**
     * @var string|null
     */
    protected $addressString;

    /**
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @return string|null
     */
    public function getAddressString(): ?string
    {
        return $this->addressString;
    }
}
