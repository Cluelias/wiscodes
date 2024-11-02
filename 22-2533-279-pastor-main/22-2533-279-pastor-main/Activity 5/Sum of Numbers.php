<?php
$sum = 0;
$count = 1;

while ($count <= 100) {
    $sum += $count;
    $count++;
}

echo "The sum of numbers from 1 to 100 is: $sum" . PHP_EOL;
?>
