<?php

declare(strict_types=1);

namespace Exercises\Reverse;

/**
 * Create methods that reverse given input by its positions.
 *
 * @method static int int(int $number)
 * @method static string string(string $string)
 * @example Reverse::int(12) === 21
 * @example Reverse::int(912) === 219
 * @example Reverse::int(120) === 21
 * @example Reverse::int(-12) === -21
 * @example Reverse::int(-120) === -21
 * @example Reverse::string('qwerty')  === 'ytrewq'
 * @example Reverse::string('apple')  === 'elppa'
 */
final class Reverse
{
    public static function int(int $number): int
    {
        if ($number>0) {
            return (int)strrev((string)$number);
        }

        $reversed = strrev((string)$number);
        $reversed = substr($reversed, 0, -1);

        $array = str_split($reversed);
        foreach ($array as $key => $int) {
            if ($int !== '0') {
                break;
            }

            unset($array[$key]);
        }

        return (int) ('-' . implode($array));
    }

    public static function string(string $number): string
    {
        return strrev($number);
    }
}
