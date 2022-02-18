<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 17.02.2022
 * Time: 16:25
 */

namespace mfteam\kontur\responses\items\misc;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Код ОКПД/ОКПД2/КТРУ
 *
 * Class Code
 * @package mfteam\kontur\responses\items\misc
 */
class Code extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $code;

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
    public function getCode(): ?string
    {
        return $this->code;
    }
}
