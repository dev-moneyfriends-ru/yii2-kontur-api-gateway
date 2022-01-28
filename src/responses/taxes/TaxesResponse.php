<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 20:02
 */

namespace mfteam\kontur\responses\taxes;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\finan_values\items\FinanValueCollection;
use mfteam\kontur\responses\taxes\items\TaxesCollection;

/**
 * Уплаченные налоги и сборы
 *
 * Class TaxesResponse
 * @package mfteam\kontur\responses\taxes
 */
class TaxesResponse extends AbstractCompanyResponse
{
    /**
     * @var TaxesCollection|null
     */
    protected $taxes;

    /**
     * @return TaxesCollection|null
     */
    public function getTaxes(): ?TaxesCollection
    {
        return $this->taxes;
    }

    /**
     * @param array $data
     */
    public function setTaxes(array $data = []): void
    {
        $this->taxes = new TaxesCollection($data);
    }
}
