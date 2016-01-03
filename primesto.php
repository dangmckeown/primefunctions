<?php

include_once('primefunctions.php');
$input = $_POST['input'];

$primes = primes_to($input);

foreach ($primes as $prime){
echo "$prime<br />";
}
?>
