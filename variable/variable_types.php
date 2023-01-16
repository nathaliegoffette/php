<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php $name = "Nathalie"; $age = "41"; $eyesColor = "blue"; $hungry = false ?>
<p> Hi ! My name is <?php echo $name ?>. </p> 
<p> I am <?php $age ?> years old. </p> 
<p> My eyes are <?php echo $eyesColor ?>. </p>
<?php $myFamily = array(
    0 => "François",
    1 => "Abigael",
    2 => "Lilwenn",
    3 => "Aelynn");
?>
<p> The first person in my family is <?php echo $myFamily[0] ?> </p>
<p>Are you hungry ? <?php echo $hungry ?> </p>




</body>
</html>




