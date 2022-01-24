<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\items\company;

use mfteam\kontur\responses\AbstractKonturBaseItem;
use yii\helpers\ArrayHelper;

/**
 * Лица, имеющие право подписи без доверенности (руководители)
 *
 * Class HeadsCollectionItemResponse
 * @package mfteam\kontur\responses\items
 *
 * @property-read CompanyHeadItem $firstItem
 * @property-write array $items
 */
class CompanyHeadCollectionItem extends AbstractKonturBaseItem
{
    /**
     * @var CompanyHeadItem[]
     */
    protected $items = [];

    /**
     * @inheritDoc
     */
    public function __construct(array $config = [])
    {
        parent::__construct();

        $this->setItems($config);
    }

    /**
     * @param array $data
     *
     * @return void
     */
    public function setItems(array $data = [])
    {
        $data = array_filter($data, function ($datum) {
            return
                is_array($datum) === true &&
                empty($datum) === false;
        });

        $this->items = ArrayHelper::getColumn($data, function (array $datum) {
            return new CompanyHeadItem($datum);
        });
    }

    /**
     * @return CompanyHeadItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return CompanyHeadItem|null
     */
    public function getFirstItem(): ?CompanyHeadItem
    {
        return
            empty($this->items) === false ?
                current($this->items) :
                null;
    }
}