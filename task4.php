
<?php


function generateFibonacci($n) {
    $fibonacci = [];

    if ($n >= 1) {
        $fibonacci[] = 0;
    }

    if ($n >= 2) {
        $fibonacci[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$number_of_fibonacci = 15;
$fibonacci_series = generateFibonacci($number_of_fibonacci);

echo "First $number_of_fibonacci Fibonacci numbers: ";
foreach ($fibonacci_series as $num) {
    echo "$num ";
}

