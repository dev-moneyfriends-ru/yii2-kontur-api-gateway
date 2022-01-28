<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:40
 */

namespace mfteam\kontur\responses\buh;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\buh\items\BuhFormCollection;

/**
 * Бухгалтерская отчетность
 *
 * Class BuhResponse
 * @package mfteam\kontur\responses\AbstractKonturBaseResponse
 */
class BuhResponse extends AbstractCompanyResponse
{
    /**
     * @var BuhFormCollection|null
     */
    protected $buhForms;

    /**
     * @return BuhFormCollection|null
     */
    public function getBuhForms(): ?BuhFormCollection
    {
        return $this->buhForms;
    }

    /**
     * @param array $data
     */
    public function setBuhForms(array $data = []): void
    {
        $this->buhForms = new BuhFormCollection($data);
    }
}
