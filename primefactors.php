<?php

include_once('primefunctions.php');

$input = $_POST['input'];

echo "<h1>Prime factors of $input</h1>";

if ($input > 100000){
echo "Less of the huge numbers, you! Let's keep it below 100,000 for everyone's sake";
}
else
{
$factors = prime_factors($input);

foreach ($factors as $factor){
echo "$factor <br />";
}
}

echo "<p><a href='index.php'>Return to main page</a></p>";

?>
