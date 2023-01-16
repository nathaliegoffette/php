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
	<label for="species">Are you a human, a cat or a unicorn ?</label>
	<input type="" name="species">
	<input type="submit" name="submit" value="What are you ?"><br>
</form>

<?php

if (isset($_GET['species'],)){
	$species = $_GET['species'];

    echo $hello = ($species == 'human') ? "<img src='https://media.giphy.com/media/3ohs4yDzHuQ8qRgJQA/giphy.gif' width='600'/>" : (($species == 'cat') ? "<img src='https://media.giphy.com/media/YRtLgsajXrz1FNJ6oy/giphy.gif' width='600'/>" : "<img src='https://media.giphy.com/media/WZmgVLMt7mp44/giphy.gif' width='600'/>");

}


?>

</body>
</html>