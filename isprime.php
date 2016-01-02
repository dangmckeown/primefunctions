<?php

include_once['primefunctions.php'];

$input = $_POST['input'];

$isprime = is_prime($input);

if (! $isprime){
echo "$input is not a prime number";
}else{
echo "$input is a prime number";
}

?>
