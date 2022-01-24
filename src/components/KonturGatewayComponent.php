<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 12:10
 */

namespace mfteam\kontur\components;

use mfteam\kontur\KonturGateway;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Компонент общения с API Контур.Фокус
 *
 * Class KonturGatewayComponent
 * @package mfteam\kontur\components
 */
class KonturGatewayComponent extends Component
{
    /**
     * Api ключ
     *
     * @var string
     */
    public $apiKey;

    /**
     * Шлюз
     *
     * @var KonturGateway
     */
    private $gateway;

    /**
     * @inheritDoc
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();

        if (empty($this->apiKey) === true) {
            throw new InvalidConfigException('Api Key is required.');
        }

        $this->initGateway();
    }

    /**
     * Инициализация шлюза
     *
     * @return void
     */
    private function initGateway()
    {
        $apiKey = $this->apiKey;
        $this->gateway = KonturGatewayFactory::instanceHttp($apiKey);
    }
}
