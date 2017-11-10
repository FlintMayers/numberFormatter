<?php
/**
 * Created by PhpStorm.
 * User: t0000678
 * Date: 11/10/17
 * Time: 7:40 PM
 */

namespace AppBundle\Service;


class NumberFormatter
{
    public function format(float $n): string {
        $abs_num = abs($n);

        if ($abs_num >= 999500) {
            $num = round(($n / 1000000), 2);
            return number_format($num, 2, '.', '') . 'M';
        } elseif($abs_num >= 99950 && $abs_num <= 999500) {
            return round($n/1000) . 'K';
        } elseif($abs_num >= 1000 && $abs_num < 99950) {
            $num = round($n);
            return number_format($num, 0, '.', ' ');
        } elseif($abs_num < 1000 && $abs_num >= 0) {
            $num = round($n, 2);
            return $num;
        }
    }
}