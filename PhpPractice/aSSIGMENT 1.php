<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Assignment 1</title>
</head>
<body>

<h1>PHP Assignment 1</h1>

<?php
// Change the sample values below to try other integer numbers.

// Question 1: Greatest and smallest of three integers.
echo "<h2>1. Greatest and Smallest Numbers</h2>";

$a = 15;
$b = 8;
$c = 23;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) {
    $greatest = $b;
}
if ($c > $greatest) {
    $greatest = $c;
}
if ($b < $smallest) {
    $smallest = $b;
}
if ($c < $smallest) {
    $smallest = $c;
}

echo "Numbers: $a, $b, $c<br>";
echo "Greatest: $greatest<br>";
echo "Smallest: $smallest<br>";

// Question 2: Divisibility by 3, 5, both, or neither.
echo "<h2>2. Divisibility by 3 and 5</h2>";

$number = 30;

// Check both first because 30 also satisfies each individual condition.
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5.<br>";
} elseif ($number % 3 == 0) {
    echo "$number is divisible by 3 only.<br>";
} elseif ($number % 5 == 0) {
    echo "$number is divisible by 5 only.<br>";
} else {
    echo "$number is divisible by neither 3 nor 5.<br>";
}

// Question 3a: Odd numbers from 2 to 20.
echo "<h2>3. Odd and Even Numbers</h2>";
echo "Odd numbers from 2 to 20:<br>";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}

// Question 3b: Even numbers from 35 down to 7.
echo "<br><br>Even numbers from 35 to 7:<br>";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}
echo "<br>";

// Question 4: Numbers divisible by both 2 and 5, from 50 down to 2.
echo "<h2>4. Numbers Divisible by Both 2 and 5</h2>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
}
echo "<br>";

// Question 5: Reverse a number using arithmetic and a while loop.
echo "<h2>5. Reverse of a Number</h2>";

$number = 12345;
$remaining = $number;
$reverse = 0;

if ($remaining < 0) {
    $remaining = -$remaining;
}

while ($remaining > 0) {
    $digit = $remaining % 10;             // Get the last digit.
    $reverse = $reverse * 10 + $digit;    // Add it to the reverse.
    $remaining = ($remaining - $digit) / 10; // Remove the last digit.
}

if ($number < 0) {
    $reverse = -$reverse;
}

echo "Reverse of $number = $reverse<br>";

// Question 6: Least common multiple of two positive integers.
echo "<h2>6. Least Common Multiple</h2>";

$a = 8;
$b = 12;

if ($a > 0 && $b > 0) {
    if ($a > $b) {
        $lcm = $a;
    } else {
        $lcm = $b;
    }

    // Stop at the first number divisible by both inputs.
    while ($lcm % $a != 0 || $lcm % $b != 0) {
        $lcm++;
    }

    echo "LCM of $a and $b = $lcm<br>";
} else {
    echo "Please use two positive integers.<br>";
}

// Question 7: Highest common factor of two integers.
echo "<h2>7. Highest Common Factor</h2>";

$a = 18;
$b = 24;
$first = $a;
$second = $b;

// Use positive values when checking factors.
if ($first < 0) {
    $first = -$first;
}
if ($second < 0) {
    $second = -$second;
}

if ($first == 0 && $second == 0) {
    echo "There is no highest positive common factor of 0 and 0.<br>";
} else {
    if ($first == 0) {
        $hcf = $second;
    } elseif ($second == 0) {
        $hcf = $first;
    } else {
        $hcf = 1;

        for ($i = 1; $i <= $first && $i <= $second; $i++) {
            if ($first % $i == 0 && $second % $i == 0) {
                $hcf = $i;
            }
        }
    }

    echo "HCF of $a and $b = $hcf<br>";
}

// Question 8: Multiplication table using nested loops.
echo "<h2>8. Multiplication Table</h2>";
echo "<table border='1' cellspacing='0' cellpadding='4'>";
echo "<caption>Multiplication Table</caption>";

for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";

    for ($column = 1; $column <= 12; $column++) {
        echo "<td>" . ($row * $column) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

// Question 9: Check whether a number is prime.
echo "<h2>9. Prime or Non-prime</h2>";

$number = 29;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a prime number.<br>";
} else {
    echo "$number is a non-prime number.<br>";
}

// Question 10: Print prime numbers from 10 to 50.
echo "<h2>10. Prime Numbers from 10 to 50</h2>";

for ($number = 10; $number <= 50; $number++) {
    $isPrime = true;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "$number ";
    }
}
echo "<br>";
?>

</body>
</html>