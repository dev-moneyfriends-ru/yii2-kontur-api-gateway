<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:39
 */

namespace mfteam\kontur\responses\fsa;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\fsa\items\ItemsFsaCollection;

/**
 * Сертификаты и декларации соответствия
 *
 * Class FsaResponse
 * @package mfteam\kontur\responses\fsa
 */
class FsaResponse extends AbstractCompanyResponse
{
    /**
     * @var ItemsFsaCollection|null
     */
    protected $fsa;

    /**
     * @return ItemsFsaCollection|null
     */
    public function getFsa(): ?ItemsFsaCollection
    {
        return $this->fsa;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setFsa(array $data = []): void
    {
        $this->fsa = new ItemsFsaCollection($data);
    }
}
