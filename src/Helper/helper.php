<?php

use Anuzpandey\LaravelNepaliDate\LaravelNepaliDate;

if (!function_exists('toBS')) {
    /**
     * The function converts a given date to the Nepali date format
     *
     * @param string date The date parameter is a string that represents the date in the Gregorian
     * calendar format. It should be in the format "YYYY-MM-DD" or "YYYY/MM/DD".
     * @param string|null format The format parameter is used to specify the desired format of the Nepali
     * date. It is an optional parameter and if not provided, the default format will be used.
     * @param string|null locale The "locale" parameter is used to specify the language and region
     * @return string Nepali date converted from the given date.
     */
    function toBS($date, $format = null, $locale = null): string
    {
        return LaravelNepaliDate::from($date)
            ->toNepaliDate($format ?? 'Y-m-d', $locale ?? 'en');
    }
}


if (!function_exists('toAD')) {
    /**
     * The function converts a given date from Nepali (Bikram Sambat) to English format
     * 
     * @param string date The date parameter is a string that represents the date in the Gregorian
     * calendar format. It should be in the format "YYYY-MM-DD" or "YYYY/MM/DD".
     * @param string|null format The format parameter is used to specify the desired format of the English
     * date. It is an optional parameter and if not provided, the default format will be used.
     * @param string|null locale The "locale" parameter is used to specify the language and region
     * @return string English date converted from the given Nepali Date.
     */
    function toAD($date, $format = null, $locale = null): string
    {
        return LaravelNepaliDate::from($date)
            ->toEnglishDate($format ?? 'Y-m-d', $locale ?? 'en');
    }
}
