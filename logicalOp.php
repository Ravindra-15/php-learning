<?php
$a = 5;
$b = 8;
$c = 9;

//................................ logical && ..........................

if($a > $b && $a > $c){
    echo $a." is the greatest number.";
} 
else if($b > $a && $b > $c){
    echo $b." is the greatest number.";
}
else{
    echo $c." is the greatest number.";
}
echo "<br>";


//............................... logical or || ..........................................

// Check if all values are the same 
if($a == $b || $a == $c){
    echo "All have same values.";
}
else{
    echo "All dont have same values.";
}
echo "<br>";

//...................................... xor...........................................

$num1 = 10;
$num2 = 11;
// Using xor to check if only one condition is true
if($num1 == 10 xor $num2 == 10){
    echo "Condition is true.";// This will execute because only $num1 == 10 is true
}
else{
    echo "Condition is not true.";// This will execute if both are true or both are false
}
echo "<br>";
//............................... logical not ! ..........................................

$flag = false;
if(!$flag){
    echo "Flag value is false.";
}
else{
    echo "Flag value is true.";
}


?>