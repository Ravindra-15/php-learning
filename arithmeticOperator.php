<?php
$num1 = 10;
$num2 = 20;

echo "Sum is: " . ($num1 + $num2);
echo '<br>';  // Corrected to <br>
echo "Subtraction is: " . ($num1 - $num2);
echo '<br>';
echo "Multiplication is: " . ($num1 * $num2);
echo '<br>';
echo "Division is: " . ($num1 / $num2);
echo '<br>';
echo "Modulo is: " . ($num2 % $num1);  // Corrected order for modulus: $num2 % $num1
echo '<br>';

echo "Power (num2 raised to num1) is: " . ($num2 ** $num1);  // Exponentiation
echo '<br>';
?>
