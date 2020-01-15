<?php


use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider numerals
     * @param $number
     * @param $numerals
     */
    function roman_numerals_for_numbers($number, $numerals){
        $romanNumerals = new RomanNumerals;
        $this->assertEquals($numerals, $romanNumerals->getNumerals($number));
    }

    public function numerals()
    {
        return [
          [1, "I"],
          [2, "II"],
          [3, "III"],
          [4, "IV"],
          [5, "V"],
          [6, "VI"],
          [9, "IX"],
          [10, "X"],
          [15, "XV"],
          [19, "XIX"],
          [40, "XL"],
          [50, "L"],
          [90, "XC"],
          [100, "C"],
          [123, "CXXIII"],
          [949, "CMXLIX"],
          [4000, "MMMM"],
        ];
    }
}
