<?php


class Speedometer
{

    const DISTANCES = [
        '1 km' => '0.621371 miles',
        '2 kms' => '1.24274 miles',
        '5 kms' => '3.10686 miles',
        '10 kms' => '6.21371 miles',
        '1 mile' => '1,60934 kms',
        '2 miles' => '3,21869 kms',
        '5 miles' => '8,04672 kms',
        '10 miles' => '16,0934 kms'
    ];

    public static function convertKmToMiles(string $km) : ?string
    {
        return array_key_exists($km, self::DISTANCES) ? self::DISTANCES[$km] : null;
    }

    public static function milesToKm(string $miles) : ?string
    {
        return array_key_exists($miles, self::DISTANCES) ? self::DISTANCES[$miles] : null;
    }
}
