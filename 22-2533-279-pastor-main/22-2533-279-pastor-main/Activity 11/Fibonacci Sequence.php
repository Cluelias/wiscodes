<?php
$first = 0;
$second = 1;
$fibNumbers = [$first, $second];

while (count($fibNumbers) < 10) {
    $next = $first + $second;
    $fibNumbers[] = $next;
    $first = $second;
    $second = $next;
}

echo implode(" ", $fibNumbers) . PHP_EOL;
?>
