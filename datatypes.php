<?php
$name = "Ravindra Kumar";
echo var_dump($name);
echo "<br>";
$num = 10;
echo var_dump($num);
echo "<br>";
$floatNum = 10.10;
echo var_dump($floatNum);
echo "<br>";
 
$bool = true;
echo var_dump($bool);
echo "<br>";

$arr = ["Ravin", "Kumar", "Hello", "Name", 10, 20, 30];
echo var_dump($arr);
echo "<br>";

$brr = [10,20,30,40,50];
echo var_dump($brr);
echo "<br>";

$empty = null;
echo var_dump($empty);
echo "<br>";

// $connection = ftp_connect("127.0.0.1") or die ("localhost not found");
// echo var_dump($connection);

if (function_exists('ftp_connect')) {
    $connection = ftp_connect("127.0.0.1") or die("FTP connection failed: localhost not found");
    echo var_dump($connection);
} else {
    echo "FTP functions are not available in this PHP setup.";
}
?>