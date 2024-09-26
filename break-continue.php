<?php

$num = 50;
echo "Printing odd numbers: <br>";

for($i = 0; $i < $num; $i++){
    if($i % 2 == 0){
        continue;
    }
    echo $i."<br>";
}

echo "Printing even numbers: <br>";
for($i = 0; $i < $num; $i++){
    if($i % 2 != 0){
        continue;
    }
    echo $i."<br>";
}
?>
<?php
echo "Using break statement:<br>";
 
for($i = 0; $i <10; $i++){
    if($i == 5){ // When $i becomes 5, the loop stops
        break;
    }
    echo $i."<br>"; // Prints numbers from 0 to 4
}

?>