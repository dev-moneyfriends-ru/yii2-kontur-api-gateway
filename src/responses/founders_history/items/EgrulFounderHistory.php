<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 16:59
 */

namespace mfteam\kontur\responses\founders_history\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\misc\ShareShort;

/**
 * Сведения из ЕГРЮЛ
 *
 * Class EgrulFounderHistory
 * @package mfteam\kontur\responses\founders_history\items
 */
class EgrulFounderHistory extends AbstractBaseItem
{
    /**
     * @var ShareShort|null
     */
    protected $share;

    /**
     * @return ShareShort|null
     */
    public function getShare(): ?ShareShort
    {
        return $this->share;
    }

    /**
     * @param array $data
     */
    public function setShare(array $data = []): void
    {
        $this->share = new ShareShort($data);
    }
}
