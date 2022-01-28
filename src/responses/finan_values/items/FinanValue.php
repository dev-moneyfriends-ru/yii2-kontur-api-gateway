<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 20:07
 */

namespace mfteam\kontur\responses\finan_values\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Автоматический финансовый анализ
 *
 * Class FinanValue
 * @package mfteam\kontur\responses\finan_values\items
 */
class FinanValue extends AbstractBaseItem
{
    /** @var string */
    public const AAA = 'AAA';

    /** @var string */
    public const AA = 'AA';

    /** @var string */
    public const A = 'A';

    /** @var string */
    public const BBB = 'BBB';

    /** @var string */
    public const BB = 'BB';

    /** @var string */
    public const B = 'B';

    /** @var string */
    public const CCC = 'CCC';

    /** @var string */
    public const CC = 'CC';

    /** @var string */
    public const C = 'C';

    /** @var string */
    public const D = 'D';

    /**
     * @var float|null
     */
    protected $statisticalScore;

    /**
     * @var string|null
     */
    protected $expertRating;

    /**
     * @var string|null
     */
    protected $focusHref;

    /**
     * @return float|null
     */
    public function getStatisticalScore(): ?float
    {
        return $this->statisticalScore;
    }

    /**
     * @return string|null
     */
    public function getExpertRating(): ?string
    {
        return $this->expertRating;
    }

    /**
     * @return string|null
     */
    public function getFocusHref(): ?string
    {
        return $this->focusHref;
    }
}
