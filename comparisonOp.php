<?php
$num1 = 4;
$num2 = 5;
if($num1 ==$num2){
    echo "true";
}
else{
    echo "false";
}
echo "<br>";
$a = 10;
$b = 12;
$c = "10";
var_dump($a === $b);
echo "<br>";
var_dump($a === $c);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";

//......................................important (Spaceship) Operator.............................
var_dump($a <=> $b);
echo "<br>";
?>
