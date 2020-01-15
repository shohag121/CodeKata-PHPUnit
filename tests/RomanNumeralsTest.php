<?php


use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     * @param $number
     * @param $numerals
     */
    function roman_numerals_for_numbers($number, $numerals){
        $romanNumerals = new RomanNumerals;
        $this->assertEquals($numerals, $romanNumerals->getNumerals($number));
    }

    /**
     * @test
     */
    function it_can_not_generate_roman_nemerals_for_0(){
        $romanNumerals = new RomanNumerals;
        $this->assertEquals(false, $romanNumerals->getNumerals(0));
    }

    /**
     * @test
     */
    function it_can_not_generate_roman_nemerals_for_greter_than_3999(){
        $romanNumerals = new RomanNumerals;
        $this->assertEquals(false, $romanNumerals->getNumerals(4500));
    }


    public function checks()
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
          [4000, false],
        ];
    }
}
