<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 16:18
 */

namespace mfteam\kontur\responses\inspections;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\inspections\items\ItemInspectionCollection;

/**
 * Плановые и внеплановые проверки из ЕРП
 *
 * Class InspectionsResponse
 * @package mfteam\kontur\responses\inspections
 */
class InspectionsResponse extends AbstractCompanyResponse
{
    /**
     * @var ItemInspectionCollection|null
     */
    protected $inspections;

    /**
     * @return ItemInspectionCollection|null
     */
    public function getInspections(): ?ItemInspectionCollection
    {
        return $this->inspections;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setInspections(array $data = []): void
    {
        $this->inspections = new ItemInspectionCollection($data);
    }
}
