<?php

include_once('primefunctions.php');

$input = $_POST['input'];

$isprime = is_prime($input);

echo "<h1>Is $input prime?</h1>";

if (! $isprime){
echo "$input is not a prime number";
}else{
echo "$input is a prime number";
}

echo "<a href='index.php'>Return to main page</a>";
?>
