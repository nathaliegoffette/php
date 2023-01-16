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


$firstnames = ['Maurice', 'Alice', 'Jésus', 'Judas'];

foreach ($firstnames as $firstname){
    echo "<p>Hello $firstname!</p>";
    echo '<hr>';
}

$words  = "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are , the only important thing is that the first and last letter be at the right place . The rest can be a total mess and you can still read it without problem . This is because the human mind does not read every letter by itself but the word as a whole .";
$words = explode(" ", $words);

foreach ($words as $word){
    $word = str_shuffle($word);
    print_r($word . " ");
    }


$names = ['julie', 'barbara', 'éléa', 'aelynn', 'lilwenn', 'abigael'];

foreach ($names as $name){
    $name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
    echo '<pre>';
    print_r($name);
    echo '</pre>';
}
echo '<br>';
date_default_timezone_set('UTC+1');
echo date('Y');
echo '<br>';
echo date(("j F Y h:i:s"));
echo '<br>';

function sum($a,$b){
    if(is_numeric($a)==1 && is_numeric($b)==1){
        $sum = $a + $b;
        echo("The sum of $a and $b is $sum.");
    } else{
        echo("These are not numbers, cannot make sum !");
    }
 
};

sum(B,22);

echo '<br>';

$acronyms = 'If you know you know';   
$acronyms = explode(" ", $acronyms);

foreach ($acronyms as $acronym){
    $acronym = ucfirst($acronym);
    $firstLetter = mb_substr($acronym, 0, 1);
    print_r($firstLetter);
    }

echo '<br>';

$wordToChange1 = ['caecotrophie',"chaenichthys","microsphaera", "sphaerotheca"];
$wordToChange2 = ['cæcotrophie' , 'chænichthys', 'microsphæra', 'sphærotheca'];
$replace1 = ['ae' => 'æ', 'AE' => 'Æ'];
$replace2 = ['æ' => 'ae', 'Æ' => 'AE'];
 
echo '<pre>';
print_r (str_replace(array_keys($replace1), $replace1, $wordToChange1));
echo '</pre>';

echo '<pre>';
print_r (str_replace(array_keys($replace2), $replace2, $wordToChange2));
echo '</pre>';

echo '<br>';

$feedback = ['info','error','warning'];
$feedback = [
    'info' => 'Incorrect email adress',
    'error' => 'An error occurs',
    'warning' => 'Warning, please take care'
];

function feedbackMessage($feedback){
if ($feedback == ['info']){
    echo '</pre>';
    print_r('<div class="info">Incorrect email adress</div>');
    echo '</pre>';
} elseif ($feedback == ['error']){
    echo '</pre>';
    print_r('<div class="error">An error occurs</div>');
    echo '</pre>';
} else {
    echo '</pre>';
    print_r('<div class="warning">Warning, please take care</div>');
    echo '</pre>';
}
}

feedbackMessage([1]);

echo '<br>';

function generateRandomWord() {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomWord = '';
    $randomWordLength = mt_rand(1, 5);
    for ($i = 0; $i < $randomWordLength; $i++) {
        $randomWord .= $characters[mt_rand(0, 25)];
    }
    return $randomWord;
};

function generateRandomWord2() {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomWord2 = '';
    $randomWordLength2 = mt_rand(7, 15);
    for ($i = 0; $i < $randomWordLength2; $i++) {
        $randomWord2 .= $characters[mt_rand(0, 25)];
    }
    return $randomWord2;
};

echo generateRandomWord().'\n';
echo generateRandomWord2();

echo '<br>';

$string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo strtolower($string);

echo '<br>';

$pi = 3.14;
$ray = 5 ;
$height = 3;

function volume(){
    $pi = 3.14;
    $ray = 8 ;
    $height = 6;
    $volume = ($ray*$ray*$pi*$height*(1/3));
    echo 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' is ' . $volume . '  cm<sup>3</sup><br />';
}

echo volume();
?>


</body>
</html>