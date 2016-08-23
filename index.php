<!doctype=html>
<html>

<head>
 <title>Prime functions</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<style>

@media-screen and (min-width:712px){
body{margin-left: 20%;}
}


@media-screen and (min-width:512px){
#optimus_prime_pic{width:512px;}
}

@media-screen and (max-width:511px){
#optimus_prime_pic{width:100%;}
}
</style>
</head>
<body>
<center><h1>Prime functions</h1>

<p>Preambulatory paragraph here</p>
</center>

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

</body>
</html>
