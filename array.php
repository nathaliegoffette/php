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

$family = ["François", "Abigael", "Lilwenn", "Aelynn"];
print_r($family);

$recipes = ["Dahl", "Chili", "Bouddah Bowl", "Tacos", "Pasta"];
print_r($recipes);

$movies = ["Love Actually", "Star Wars", "Mercredi", "Mange Prie Aime"];
print_r($movies);

$me = array(
    'firstname' => 'Nathalie',
    'age' => 41,
    'season' => 'spring',
    'loveSoccer' => false,

);

$me['hobbies'] = array('apiculture', 'running', 'whool lover', 'nature');


$mother = array(
    'firstname' => 'Beatrice',
    'age' => 61,
    'season' => 'spring',
    'loveSoccer' => false,

);

$me['family']= $mother;

$mother['hobbies'] = array('walking', 'bakery', 'reading', 'baking','nature');

$me['hobbies'][]='taxidermy';

$francois = array(
    'firstname' => 'François',
    'age' => 40,
    'season' => 'spring',
    'loveSoccer' => false,
);

$francois['hobbies'] = array('video games', 'running', 'reading', 'cooking','nature');


echo '<pre>';
print_r($me);
echo '</pre>';

echo '<pre>';
print_r($francois);
echo '</pre>';

//intersect intersect_key

echo count($me['hobbies']);
echo "<br>";
echo count($mother['hobbies']);
echo "<br>";
echo count($mother['hobbies'])+count($me['hobbies']);
echo "<br>";

$similar = array_intersect($me['hobbies'], $francois['hobbies']);
echo '<pre>';
print_r($similar);
echo '</pre>';
$merge = array_merge($me['hobbies'], $francois['hobbies']);
echo '<pre>';
print_r($merge);
echo '</pre>';

echo '<pre>';
print_r($web_development);
echo '</pre>';

$web_development['front'] = [];
$web_development['back'] = [];

$web_development['front'][]='xhtml';
$web_development['front'][]='Ruby on Rails';
$web_development['back'][]='Ruby on Rails';
$web_development['front'][]='Css';
$web_development['front'][]='Flash';
$web_development['front'][]='Javascript';
$web_development['back'][]='Javascript';
$web_development['front']['0']='html';
unset($web_development['front'][3]);

echo '<pre>';
print_r($web_development);
echo '</pre>';






?>


</body>
</html>