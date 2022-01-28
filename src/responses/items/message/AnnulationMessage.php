<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 11:35
 */

namespace mfteam\kontur\responses\items\message;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Аннулирование
 *
 * Class AnnulationMessage
 * @package mfteam\kontur\responses\items\message
 */
class AnnulationMessage extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $messageId;

    /**
     * @var string|null
     */
    protected $reason;

    /**
     * @return string|null
     */
    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
}
