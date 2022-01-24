<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 16:25
 */

namespace mfteam\kontur\requests;

/**
 * Общий интерфейс Запроса к API Контур.Фокус
 *
 * Class KonturRequestInterface
 * @package mfteam\kontur\requests
 */
interface KonturRequestInterface
{
    /**
     * Преобразование в массив
     *
     * @return array
     */
    public function toArray(): array;
}