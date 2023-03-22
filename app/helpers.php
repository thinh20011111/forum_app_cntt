<?php

function format_number($number)
{
    if ($number >= 1000) {
        $suffixes = ['', 'k', 'm', 'b', 't'];
        $suffixIndex = 0;
        while ($number >= 1000) {
            $number /= 1000;
            $suffixIndex++;
        }
        return round($number, 2) . $suffixes[$suffixIndex];
    } else {
        return $number;
    }
}