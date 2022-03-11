<?php

namespace App\Traits;

trait PINTrait
{
    public function GenerateCode()
    {
        $length = 4;
        $min = pow(10, $length - 1) ;
        $max = pow(10, $length) - 1;
        return $rand =  mt_rand($min, $max);
    }
}
