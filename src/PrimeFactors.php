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
        $divisor = 2;

        while ($number > 1){
            while ($number % $divisor == 0 ){
                $factors[] = $divisor;

                $number = $number / $divisor;
            }
            $divisor++;
        }


        return $factors;
    }
}