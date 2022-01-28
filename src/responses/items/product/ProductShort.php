<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:44
 */

namespace mfteam\kontur\responses\items\product;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Продукт краткий
 *
 * Class ProductShort
 * @package mfteam\kontur\responses\items\product
 */
class ProductShort extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $okpd2;

    /**
     * @var string|null
     */
    protected $okp;

    /**
     * @var string|null
     */
    protected $tnVed;

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
    public function getOkpd2(): ?string
    {
        return $this->okpd2;
    }

    /**
     * @return string|null
     */
    public function getOkp(): ?string
    {
        return $this->okp;
    }

    /**
     * @return string|null
     */
    public function getTnVed(): ?string
    {
        return $this->tnVed;
    }
}
