<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/style.css"> 
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title>Excuses</title>
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

<div class="answer">
<h2>Here's your excuse :</h2>
<?php

if (isset($_GET['name'], $_GET['gender'], $_GET['teacher'], $_GET['excuse'])){
	$name = $_GET['name'];
	$gender = $_GET['gender'];
	$teacher = $_GET['teacher'];
	$excuse = $_GET['excuse'];
    $today = date("l j F Y "); 

	if ($gender == boy && $excuse == illness){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de mon fils " . $name . ", qui est souffrant aujourd'hui. Je vous remercie pour votre compréhension";
	} else if ($gender == girl && $excuse == illness){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de ma fille " . $name . ", qui est souffrante aujourd'hui. Je vous remercie pour votre compréhension";
	} else if ($gender == boy && $excuse == death){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de mon fils " . $name . " aujourd'hui. Ce dernier est particulièrement affecté par le disparition prématurée de son chien auquel il était extremement attaché.";
	} else if ($gender == girl && $excuse == death){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de ma fille " . $name . " aujourd'hui. Cette dernière est particulièrement affectée par le disparition prématurée de son chien auquel elle était extremement attachée.";
	} else if ($gender == boy && $excuse == significant){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de mon fils " . $name . " aujourd'hui. Nous n'avons en effet pas pu quitter notre domicile car un incendie dans l'usine proche de notre quartier a engendré la diffusion dans l'air de produits dangereux. La protection civile nous a recommandé de rester confinés. Merci pour votre compréhension.";
	} else if ($gender == girl && $excuse == significant){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de ma fille " . $name . " aujourd'hui. Nous n'avons en effet pas pu quitter notre domicile car un incendie dans l'usine proche de notre quartier a engendré la diffusion dans l'air de produits dangereux. La protection civile nous a recommandé de rester confinés. Merci pour votre compréhension.";
	} else if ($gender == boy && $excuse == meteo){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de mon fils " . $name . " aujourd'hui. La météo particulièrement rigoureuse de la nuit dernière a engendré une épaisse couche de verglas dans notre rue, rendant toute tentative de sortie pédestre ou motorisée hautement périlleuse. Merci pour votre compréhension.";
	} else if ($gender == girl && $excuse == meteo){
		echo $today . ". Cher Mr/Mme " . $teacher . ", veuillez excuser l'absence de ma fille " . $name . " aujourd'hui. La météo particulièrement rigoureuse de la nuit dernière a engendré une épaisse couche de verglas dans notre rue, rendant toute tentative de sortie pédestre ou motorisée hautement périlleuse. Merci pour votre compréhension.";}

	 }


?>
</div>

</body>
</html>