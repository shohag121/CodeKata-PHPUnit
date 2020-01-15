<?php


namespace App;


class PrimeFactors
{
    public function generate($number)
    {
        // 1. if the number divisible by 2
        // 2. if true, then divide by 2. if false then increase candidate and try again.
        // 3. repeat

        $factors = [];

        for ($divisor = 2; $number > 1 ; $divisor++){

            for ( ; $number % $divisor == 0; $number /= $divisor ){

                $factors[] = $divisor;

            }

        }


        return $factors;
    }
}