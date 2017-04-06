<?php

include_once('primefunctions.php');

// Generate number
function generate_number($turn){
  echo "function invoked!";
$endings = ([1,3,5,7,9]);
$nums = ([0,1,2,3,4,5,6,7,8,9]);

$figs = strlen(decbin($turn));
  
  echo $figs;

$output = "";

for ($i = 0; $i < $figs; $i++){

$num = array_rand($nums);

if ($i == 0 && $num == 0){
//skip to prevent leading zero
}
else{
$output .= $num;
}

}

$output .= array_rand($endings);

return $output;

} //end generate_number

//check previous goes

if ($_POST['number']){
$number = $_POST['number'];
$response = $_POST['response'];
$turn = $_POST['response'];
$answer = is_prime($number);

if (! $answer){
prime_factors($number);

if ($answer == $response){
echo "<p>Correct!</p>";
$question = generate_number($turn);
}
else
{
echo "<p>Incorrect - game over!</p>";
echo "<p>Score: $turn</p>";


}
}

}
else
{
$turn = 0;
$question = $generate_number($turn);
}

?>

<h1><?php echo $question; ?></h1>

<form method="post" action="">

<input type="hidden" name="number" value="<?php echo $question; ?>" />
<input type="hidden" name="response" value="True" />
<input type="submit" value="Prime!" />

</form>

<form method="post" action="">

<input type="hidden" name="number" value="<?php echo $question; ?>" />
<input type="hidden" name="response" value="False" />
<input type="submit" value="Not prime!" />

</form>
