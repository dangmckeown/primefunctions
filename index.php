<?php

print <<<_html_

<h1>Primes up to chosen number</h1>
<form method="post" action="primesto.php">
<input type="text" name="input">
<input type="submit">
</form>


<h1>Test if chosen number is prime</h1>
<form method="post" action="isprime.php">
<input type="text" name="input">
<input type="submit">
</form>


<h1>Get prime factors for chosen number</h1>
<form method="post" action="primefactors.php">
<input type="text" name="input">
<input type="submit">
</form>


_html_;
?>
