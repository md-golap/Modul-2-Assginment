<?php
$first = 0;
$second = 1;

echo "First 10 Fibonacci Numbers (up to 100):\n";

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $first + $second;

    if ($fibonacci > 100) {
        break; // Break out of the loop if Fibonacci number exceeds 100
    }

    echo $fibonacci . " ";

    // Update the values for the next iteration
    $first = $second;
    $second = $fibonacci;
}

echo "\n";
?>