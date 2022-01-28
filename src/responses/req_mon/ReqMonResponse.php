<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 17:49
 */

namespace mfteam\kontur\responses\req_mon;

use mfteam\kontur\responses\AbstractBaseObject;
use mfteam\kontur\responses\ResponseInterface;

/**
 * Новости наблюдения
 *
 * Class ReqMonResponse
 * @package mfteam\kontur\responses\req_mon
 */
class ReqMonResponse extends AbstractBaseObject implements ResponseInterface
{
    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @return string|null
     */
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }
}
