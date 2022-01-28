<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 20:57
 */

namespace mfteam\kontur\requests\company;

/**
 * Запрос по компании с выбором диапазона
 *
 * Class CompanyRangeRequest
 * @package mfteam\kontur\requests
 */
class CompanyRangeRequest extends CompanyRequest
{
    /**
     * @var int|null
     */
    private $skip;

    /**
     * @var int|null
     */
    private $take;

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_merge(parent::toArray(), [
            'skip' => $this->skip,
            'take' => $this->take,
        ]);
    }

    /**
     * Установка диапазона
     *
     * @param int $skip
     * @param int $take
     *
     * @return void
     */
    public function range(int $skip, int $take)
    {
        $this->skip = $skip;
        $this->take = $take;
    }
}
