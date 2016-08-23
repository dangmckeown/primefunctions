<?php

include_once('primefunctions.php');
$input = $_POST['input'];

echo "<h1>All primes up to $input</h1>";


if ($input > 20000){
echo "<p>That's a really big number! Are you really sure you need all those primes? What are you planning to do with them?</p>";
}
else
{
echo "<p>";
$primes = primes_to($input);

$i = 0;
foreach ($primes as $prime){
echo "$prime ";
$i++;
if ($i = 10){
$i = 0;
echo "<br />";
}
}
echo "</p>";
}

echo "<p><a href='index.php'>Return to main page</a></p>";

?>
