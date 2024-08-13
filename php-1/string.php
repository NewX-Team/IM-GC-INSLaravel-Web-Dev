<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<title>String PHP</title> 
</head> 
<body> 
<h1>Berlatih String PHP</h1> 
<?php 
echo "<h3> Soal No 1</h3>";

$first_sentence = "Hello PHP!"; 
$second_sentence = "I'm ready for the challenges"; 


$first_length = strlen($first_sentence);
$first_word_count = str_word_count($first_sentence);

$second_length = strlen($second_sentence);
$second_word_count = str_word_count($second_sentence);

echo "Kalimat pertama: \"$first_sentence\"<br>";
echo "Panjang string: $first_length, Jumlah kata: $first_word_count<br>";

echo "Kalimat kedua: \"$second_sentence\"<br>";
echo "Panjang string: $second_length, Jumlah kata: $second_word_count<br>";

echo "<h3>Soal No 2</h3>";
/* 
SOAL NO 2 
Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
*/ 
$string2 = "I love PHP";
echo "<label>String: </label> \"$string2\" <br>";

$words = explode(' ', $string2);
$first_word = isset($words[0]) ? $words[0] : '';
$second_word = isset($words[1]) ? $words[1] : '';
$third_word = isset($words[2]) ? $words[2] : '';

echo "Kata pertama: $first_word<br>";
echo "Kata kedua: $second_word<br>";
echo "Kata ketiga: $third_word<br>";
/* 
SOAL NO 3 
Mengubah karakter atau kata yang ada di dalam sebuah string. 
*/ 
echo "<h3>Soal No3</h3>";
$string3 = "PHP is old but sexy!";
$modified_string = str_replace("old but sexy", "old but awesome", $string3);

echo " \"$modified_string\"";
// OUTPUT : "PHP is old but awesome" 
?> 
</body> 
</html> 