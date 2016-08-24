<?php
$title = "Prime functions";
include_once('header.php');
?>
<body>
<center><h1>Prime functions</h1>

</center>
<div id="main">

<b>A quick primer</b>
<ul>
<li>Prime numbers are only divisible by themselves and one</li>
<li>All non-prime numbers have <b>prime factors</b> eg 6 can be produced from 2 and 3 (2 x 3 = 6) and 12 can be produced from 2, 2 and 3 (2 x 2 x 3 = 12)</li>
<li><i>"Freedom is the right of all sentient beings"</i> - Optimus Prime (diagram below)</li>
</ul>

<h2>Primes up to chosen number</h2>
<form method="post" action="primesto.php">
<input type="text" name="input">
<input type="submit">
</form>


<h2>Test if chosen number is prime</h2>
<form method="post" action="isprime.php">
<input type="text" name="input">
<input type="submit">
</form>


<h2>Get prime factors for chosen number</h2>
<form method="post" action="primefactors.php">
<input type="text" name="input">
<input type="submit">
</form>

<a title="By Hiroyuki Obara. (Patent number 4516948) [Public domain], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File%3AOptimus_Prime_patent.png"><img id="optimus_prime_pic" alt="Optimus Prime patent" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Optimus_Prime_patent.png/512px-Optimus_Prime_patent.png"/></a>
</div>
</body>
</html>
