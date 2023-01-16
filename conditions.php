<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
/**
 * Series of exercises on PHP conditional structures.
*/

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
} 

else {
	echo "<br>Nothing to do, room is neat.";
}


// 1.2 Clean your room Exercise, improved

// Create the array of possible states

$possible_states = array("health hazard","filthy","dirty","clean","immaculate");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == 'health hazard' ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == 'dirty' ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise

// How to get the current time in PHP ? Google is your friend ;-)
$now = date("H"); 

 echo "Time is now " . $now . ". ";

// Test the value of $now and display the right message according to the specifications.
if ($now < "9") {
	echo "Good Morning!";
}

elseif ($now < "12"){
	echo "Good Day !";
}

elseif ($now < "16"){
	echo "Good Afternoon !";
}

elseif ($now < "21"){
	echo "Good Evening !";
}

else {
	echo "Good Night !";
}

// 3. "Different greetings according to age" Exercise
// Form processing
if (isset($_GET['age'], $_GET['gender'], $_GET['english'])){
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$english = $_GET['english'];
	$footTeam = $age > 21 && $age <= 40 && $gender == woman;

	if ($age > 0 && $age <= 12 && $gender == man && $english == yes){
		echo "Hello Mister Kiddo !";
	} else if ($age > 0 && $age < 12 && $gender == woman && $english == yes) {
		echo "Hello Miss Kiddo !";
	} else if ($age > 12 && $age < 18 && $gender == man && $english == yes) {
		echo "Hello Mister Teenager !";
	} else if ($age > 12 && $age < 18 && $gender == woman && $english == yes) {
		echo "Hello Miss Teenager !";
	} else if ($age > 18 && $age < 115 && $gender == man && $english == yes) {
		echo "Hello Mister Adult !";
	} else if ($age > 18 && $age < 115 && $gender == woman && $english == yes) {
		echo "Hello Miss Adult !";
	} else if ($age > 115 && $gender == man && $english == yes) {
		echo "Wow Man ! Still alive ? Are you a robot, like me ? Can I hug you?";
	} else if ($age > 115 && $gender == woman && $english == yes) {
		echo "Wow M'am ! Still alive ? Are you a robot, like me ? Can I hug you?";
	} else if ($age > 0 && $age <= 12 && $gender == man && $english == no){
		echo "Aloha Mister Kiddo !";
	} else if ($age > 0 && $age < 12 && $gender == woman && $english == no) {
		echo "Aloha Miss Kiddo !";
	} else if ($age > 12 && $age < 18 && $gender == man && $english == no) {
		echo "Aloha Mister Teenager !";
	} else if ($age > 12 && $age < 18 && $gender == woman && $english == no) {
		echo "Aloha Miss Teenager !";
	} else if ($age > 18 && $age < 115 && $gender == man && $english == no) {
		echo "Aloha Mister Adult !";
	} else if ($age > 18 && $age < 115 && $gender == woman && $english == no) {
		echo "Aloha Miss Adult !";
	} else if ($age > 115 && $gender == man && $english == no) {
		echo "Wow Man, Aloha ! Still alive ? Are you a robot, like me ? Can I hug you?";
	} else if ($age > 115 && $gender == woman && $english == no) {
		echo "Wow M'am, Aloha ! Still alive ? Are you a robot, like me ? Can I hug you?";
	}


	

	echo $footTeam ? "Welcome to the team!" : "Sorry, you don't fit the criteria !";

	 }


// Form (incomplete)
?>

<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now"><br>

	<p>Please select your Gender:</p>
	<input type="radio" id="man" name="gender" value="man">
 	<label for="man">Man</label><br>
 	<input type="radio" id="woman" name="gender" value="woman">
 	<label for="woman">Woman</label><br>
 
	 <p>Do you speak english ?</p>
	<input type="radio" id="yes" name="english" value="yes">
 	<label for="yes">Yes</label><br>
 	<input type="radio" id="no" name="english" value="no">
 	<label for="no">No</label><br>
</form>

<p>What are your results ?</p>
<form method="get" action="">
	<label for="results">Your Results :</label>
	<input type="" name="results">
	<input type="submit" name="submit" value="Give me your points ?"><br>
</form>

<?php

if (isset($_GET['results'],)){
	$results = $_GET['results'];

	if ($results < 4){
		echo "This work is really bad. What a dumb kid!";
	} else if($results < 9){
		echo "This is not sufficient. More studying is required !";
	} else if($results == 10){
		echo "Barely enough !";
	} else if($results < 15){
		echo "Not bad!";
	} else if($results < 19){
		echo "Bravo, Bravissimo!";
	} else if($results <= 20){
		echo "Too good to be true : confront the cheater !";
	}

}
?>




</body>
</html>
