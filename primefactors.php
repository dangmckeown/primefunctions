<?php

include_once('primefunctions.php');

$input = $_POST['input'];

$factors = prime_factors($input);

foreach ($factors as $factor){
echo "$factor <br />";
}

?>
