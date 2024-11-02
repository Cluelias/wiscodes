<?php
$number = 17; 
$isPrime = true;

for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i === 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime && $number > 1) {
    echo "$number is a prime number." . PHP_EOL;
} else {
    echo "$number is not a prime number." . PHP_EOL;
}
?>
