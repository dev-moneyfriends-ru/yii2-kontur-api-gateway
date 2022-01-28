<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 14:52
 */

namespace mfteam\kontur\responses\fssp;

use common\modules\fssp\items\ItemFsspCollection;
use mfteam\kontur\responses\AbstractCompanyResponse;

/**
 * Исполнительные производства
 *
 * Class FsspResponse
 * @package mfteam\kontur\responses\fssp
 */
class FsspResponse extends AbstractCompanyResponse
{
    /**
     * @var string|null
     */
    protected $updateDate;

    /**
     * @var ItemFsspCollection|null
     */
    protected $fssp;

    /**
     * @return string|null
     */
    public function getUpdateDate(): ?string
    {
        return $this->updateDate;
    }

    /**
     * @return ItemFsspCollection|null
     */
    public function getFssp(): ?ItemFsspCollection
    {
        return $this->fssp;
    }

    /**
     * @param array $data
     */
    public function setFssp(array $data = []): void
    {
        $this->fssp = new ItemFsspCollection($data);
    }
}
