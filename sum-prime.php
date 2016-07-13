<?php

function is_prime($number)
{
    // 1 is not prime
    if ( $number == 1 ) {
        return false;
    }
    // 2 is the only even prime number
    if ( $number == 2 ) {
        return true;
    }
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }

    if( $x == $i-1 ) {
        return true;
    } else {
        return false;
    }
}

//Call sum 5=> 2 + 3

$start = 0;
$end = 100;
$sum = 0;
for($i = $start; $i <= $end; $i++)
{
    if(is_prime($i))
    {
        $sum = $sum + $i;
        echo $i . PHP_EOL;
    }
}
echo $sum;


//Call sum prime when input n(5=> 2 + 3 +7 + 11 +13)
$start = 0;
$n = 1000;
$i = $j =0;

while(true) {

 if(isPrime($i)) {

  $sum = $sum + $i;
  $j++;
 }
 $i++;

 if($j == $n ){

  echo $sum;
  break;

 }

}
