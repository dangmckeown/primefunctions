
<?
//CONTENTS
//primes_to
//is_prime
//prime_factors
function primes_to($x){
$primes = array(2);
$i = 3;
while($i <=$x){
while ($i <=$x){
	foreach  ($primes as $primus){
	$p = $i % $primus;
	if ($p == 0){
	break 2;
	} //end if p = 0
	} //end foreach primes
	$primes[] = $i;
$i += 2;
} //end while $i #2
$i += 2;
} //end while $i #1
return $primes;
}
//end primes function
//===================
function is_prime($y){
if($y==2)
            {
                $prime=true;
            } elseif($y==1 || $y%2==0)
            {
                $prime=false;
            } else
            {
                $check=ceil(sqrt($y));
                $prime=true; 
                for($x=3; $x<=$check; $x+=2)
                {
                    $remNum=$y%$x; //modulus, 0 = no remainder
                    if($remNum==0)
                    {
                        $prime=false;
                        break;
                    }
                }
            }
return $prime;
}// end function is_prime
//=======================
function prime_factors($x){
$primes = primes_to($x);
if (in_array($x, $primes)){
return array("Prime numbers don't have factors! Bonehead.");
} //end if
else
{
$factors = array();
$count = count($primes) - 1;
$c = 0;
while ($x > 1){
if ($x % $primes[$c] == 0){
$factors[] = $primes[$c];
$x /= $primes[$c];
} //end if
else
{
$c++;
}
} // end while
}// end else
return $factors;
} //end prime_factors
//=====================
?>
