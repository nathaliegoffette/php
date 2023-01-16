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

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun){
    
    if ($pronoun == 'He/She'){
    echo '<pre>';
    print_r($pronoun . ' codes');
    echo '</pre>';
    } else {
    echo '<pre>';
    print_r($pronoun . ' code');
    echo '</pre>';
    }

}

$numbers = 1;
//while ($numbers <= 120){
//    echo '<pre>';
//    print_r($numbers);
//    echo '</pre>';
//    $numbers ++;
//}
    
for ($numbers =1; $numbers <= 12; $numbers ++){
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
}

$becode_people = ['Quentin', 'Dominique', 'Mathilde', 'Edouard', 'Virginie', 'Nour','Nathalie G.', 'Hugo', 'Laura', 'Aurore', 'Jonathan M.', 'Aurélien', 'Pierre', 'Corentin', 'Benjamin P.', 'Lysie', 'Céline', 'Nathalie V.', 'Arno', 'Marnie'];

foreach ($becode_people as $people){
    echo '<pre>';
    print_r($people);
    echo '</pre>';
}




    
 
?>
<select>
<?php
$countries = ['Belgium', 'Germany', 'United Kingdom', 'France', 'Italy', 'Spain', 'Brazil', 'Canada', 'Sweden', 'Norway', 'Iceland', 'Danemark'];

$countries = array(
    'BE'=>'Belgique',
    'DEU'=>'Germany',
    'GBR'=>'United Kingdom',
    'FRA'=>'France',
    'ITA'=>'Italy',
    'ESP'=>'Spain',
    'BRA'=>'Brazil',
    'CAN'=>'Canada',
    'SWE'=>'Sweden',
    'NOR'=>'Norway',
    'ISL'=>'Iceland',
    'DNK'=>'Danemark'
);

    foreach( $countries as $id=>$name) 
    echo '<option value="', $id, '">', $name, '</option>';
?>
</select>

</body>
</html>