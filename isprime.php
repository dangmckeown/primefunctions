<?php

include_once('primefunctions.php');

$input = $_POST['input'];

$title = "Is $input prime?";

include_once('header.php');


$isprime = is_prime($input);

echo "<h1>$title</h1>";

echo "<p>";

if (! $isprime){
echo "$input is not a prime number";
}else{
echo "$input is a prime number";
}

echo "</p><p><a href='index.php'>Return to main page</a></p>";
?>
