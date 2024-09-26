<?php 
for($i = 0; $i<5; $i++){
    echo "This is for loop";
    echo "<br>";
}
echo "<br>";

// Example of a  while loop.......................

$i = 1;
echo "table of 10 is:<br>";
while($i <= 10){
    echo $i * 10;
    echo "<br>";
    $i++;
}
echo "<br>";
 
// Example of a do-while loop.....................

$i = 0;
do{
    echo "This is do-while loop.";
    $i++;
    echo "<br>";
}while($i<0);
echo "<br>";
//example of for-each loop..........................

$name = array("Ram","Sita","Bharat","Laxman");
foreach($name as $value ){
    echo "Name is: ".$value;
    echo "<br>";
}
?>