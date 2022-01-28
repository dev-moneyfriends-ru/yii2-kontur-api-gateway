<?php

namespace mfteam\kontur\responses\items\message;

use mfteam\kontur\helpers\KonturResponseHelper;
use mfteam\kontur\responses\AbstractBaseCollection;

/**
 * Сообщения о банкротстве
 *
 * Class MessageCollection
 * @package mfteam\kontur\responses\items\message
 *
 * @method Message[] getItems()
 */
class MessageCollection extends AbstractBaseCollection
{
    /**
     * @inheritDoc
     */
    public function setItems(array $data = [])
    {
        $data = KonturResponseHelper::instanceRecursiveData(Message::class, $data);

        parent::setItems($data);
    }
}
