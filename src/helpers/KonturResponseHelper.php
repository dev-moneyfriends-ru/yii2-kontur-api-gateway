<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 28.01.2022
 * Time: 12:35
 */

namespace mfteam\kontur\helpers;

use InvalidArgumentException;

/**
 * Хелпер по работе с ответом
 *
 * Class KonturResponseHelper
 * @package mfteam\kontur\helpers
 */
class KonturResponseHelper
{
    /**
     * Создание классов на основе рекурсивных данных
     *
     * @param string $className
     * @param array $data
     *
     * @return array
     */
    public static function instanceRecursiveData(string $className, array $data = []): array
    {
        if (class_exists($className) === false) {
            throw new InvalidArgumentException("$className not exist");
        }

        return array_map(static function (array $datum) use ($className) {
            return new $className($datum);
        }, $data);
    }
}
