<?php

$age = 21;

if($age < 18){
    echo "You are too young to drive.";
}
else if($age >= 18 && $age <= 65){
    echo "You can drive.";
}
else if($age > 65){
    echo "You are too old to drive.";
}
else{
    echo "You can't drive.";
}

?>