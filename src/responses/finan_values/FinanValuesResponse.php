<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 20:02
 */

namespace mfteam\kontur\responses\finan_values;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\finan_values\items\FinanValueCollection;

/**
 * Автоматический финансовый анализ
 *
 * Class FinanValuesResponse
 * @package mfteam\kontur\responses\finan_values
 */
class FinanValuesResponse extends AbstractCompanyResponse
{
    /**
     * @var FinanValueCollection|null
     */
    protected $finanValues;

    /**
     * @return FinanValueCollection|null
     */
    public function getFinanValues(): ?FinanValueCollection
    {
        return $this->finanValues;
    }

    /**
     * @param array $data
     */
    public function setFinanValues(array $data = []): void
    {
        $this->finanValues = new FinanValueCollection($data);
    }
}
