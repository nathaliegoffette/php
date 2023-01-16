<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="get" action="">
	<h2>Want some excuses ? <br> Give me some answers !</h2>

	<p>
	<label for="name">What's your kid's name ?</label>
	<input type="" name="name" placeholder="The name of my kid is"><br>
	</p>

	<p>
    <input type="radio" id="boy" name="gender" value="boy">
 	<label for="boy">Boy</label><br>
 	<input type="radio" id="girl" name="gender" value="girl">
 	<label for="girl">Girl</label><br>
	</p>

    <p>
	<label for="teacher">What's the name of the teacher ?</label>
	<input type="" name="teacher" placeholder="The name of the teacher is"><br>
	</p>

    <p>
	<input type="radio" id="illness" name="excuse" value="illness">
 	<label for="illness">Illness</label><br>
 	<input type="radio" id="death" name="excuse" value="death">
 	<label for="death">Death of a pet</label><br>
    <input type="radio" id="significant" name="excuse" value="significant">
 	<label for="significant">Significant extra-curricular activity</label><br>
 	<input type="radio" id="meteo" name="excuse" value="meteo">
 	<label for="meteo">Extreme meteo conditions</label><br>
	</p>

	<p>
	<input type="submit" name="submit" value="Submit"><br>
	</p>

</form>


<?php


?>

</body>
</html>