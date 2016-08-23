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

<a title="By Hiroyuki Obara. (Patent number 4516948) [Public domain], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File%3AOptimus_Prime_patent.png"><img width="512" alt="Optimus Prime patent" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Optimus_Prime_patent.png/512px-Optimus_Prime_patent.png"/></a>


_html_;
?>
