<?php
//..............................................1st example............
$num = 10;

for($i = 0; $i < 10; $i++){
    echo "Value is: ".$i."<br>";
    if($i  == 5){
        goto outside;
    }
}
outside:
echo"Loop Break.<br>";

//.............................................2nd example..........

$loggedIn = false;

if(!$loggedIn){
    goto skipLogin;
}

echo "Welcome back, User!";
skipLogin:
echo "Please log in to continue.";
echo "<br>";

//........................................3rd example....................

function processData($value){
    echo "Processing data...<br>";

    if($value < 0){
        goto error;
    }

    echo "Data processed successfully: $value<br>";
    return;

error:
    echo "Error: Value must be non-negative.<br>";
}

processData(5);  // Output: Data processed successfully
processData(-3); // Output: Error: Value must be non-negative

?>