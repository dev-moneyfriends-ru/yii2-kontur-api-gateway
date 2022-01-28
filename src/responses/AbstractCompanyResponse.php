<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 13:28
 */

namespace mfteam\kontur\responses;


/**
 * Базовый класс ответа по компании
 *
 * Class AbstractCompanyResponse
 * @package mfteam\kontur\responses
 */
abstract class AbstractCompanyResponse extends AbstractBaseObject implements ResponseInterface
{
    /**
     * @var string|null
     */
    protected $inn;

    /**
     * @var string|null
     */
    protected $ogrn;

    /**
     * @var string|null
     */
    protected $focusHref;

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
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    /**
     * @return string|null
     */
    public function getFocusHref(): ?string
    {
        return $this->focusHref;
    }
}
