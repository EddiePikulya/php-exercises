<?php

declare(strict_types=1);

namespace Exercises\MaxChar;

/**
 * Find the most used character.
 *
 * @method static string get(string $string)
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */
final class MaxChar
{
    public static function get(string $string): string
    {
        $array = str_split($string);
        $counter = [];
        foreach($array as $let) {
            if (isset($counter[$let])) {
                ++$counter[$let];
                continue;
            }

            $counter[$let] = 1;
        }
        arsort($counter);
        return (string)array_key_first($counter);
    }
}
