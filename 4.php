<?php

function getPrimeNumbers($divisible) {
    $primeNumbers = [];
    
    for($i = 2; $i < $divisible; $i++) {
        if ($divisible % $i === 0) {
            if (getPrimeNumbers($i) == []) {
                $primeNumbers[] = $i;
            }
        }
    }

    return $primeNumbers;
}


var_dump(max(getPrimeNumbers(ceil(sqrt(600851475143))))); 

//6857, но считает оооочень долго