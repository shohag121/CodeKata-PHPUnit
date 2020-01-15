<?php


use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     * @param $number
     * @param $expects
     */
    function it_generate_prime_factors_for_number($number, $expects){
        $factors = new  PrimeFactors;

        $this->assertEquals($expects, $factors->generate($number));
    }

    public function factors()
    {
        return [
            [1, [] ],
            [2, [2] ],
            [3, [3] ],
            [4, [2,2] ],
            [5, [5] ],
            [6, [2,3] ],
            [8, [2,2,2] ],
            [100, [2,2,5,5] ],
        ];
    }
}
