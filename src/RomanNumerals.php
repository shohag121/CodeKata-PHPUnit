<?php


namespace App;


class RomanNumerals
{

    private const NUMERALS = [
        "M" => 1000,
        "CM" => 900,
        "D" => 500,
        "CD" => 400,
        "C" => 100,
        "XC" => 90,
        "L" => 50,
        "XL" => 40,
        "X" => 10,
        "IX" => 9,
        "V" => 5,
        "IV" => 4,
        "I" => 1,
    ];

    /**
     * @param $number
     * @return string
     */
    public function getNumerals($number)
    {
        $result = "";

        foreach (self::NUMERALS as $numeral => $roman){

            for (; $number >= $roman; $number -= $roman){
                $result .= $numeral;
            }

        }

        return $result;
    }
}