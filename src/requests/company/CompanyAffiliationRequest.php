<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 20:57
 */

namespace mfteam\kontur\requests\company;

/**
 * Запрос по компании с выбором связи компании
 *
 * Class CompanyAffiliationRequest
 * @package mfteam\kontur\requests
 */
class CompanyAffiliationRequest extends CompanyRequest
{
    /** @var string */
    public const TYPE_ALL = 'all';

    /** @var string */
    public const TYPE_ACTUAL = 'actual';

    /** @var string */
    public const TYPE_HISTORICAL = 'historical';

    /**
     * @var string|null
     */
    private $affiliationType;

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_merge(parent::toArray(), [
            'affiliationType' => $this->affiliationType,
        ]);
    }

    /**
     * Все связи
     *
     * @return void
     */
    public function setAsAll()
    {
        $this->affiliationType = self::TYPE_ALL;
    }

    /**
     * Все связи
     *
     * @return void
     */
    public function setAsActual()
    {
        $this->affiliationType = self::TYPE_ACTUAL;
    }

    /**
     * Все связи
     *
     * @return void
     */
    public function setAsHistorical()
    {
        $this->affiliationType = self::TYPE_HISTORICAL;
    }
}
