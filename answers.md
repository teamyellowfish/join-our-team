## About You.

 1. Iam mohamed shereef from malappuram,i have 3 year of experience in php(laravel,codeigniter,wordpress,core php), i done btech in electronics and communication from cochin university.
 2. Windows,visual studio code. 

 ## Social Profile
 1. https://github.com/shereefchonari
 2. https://www.linkedin.com/in/shereef-c-926a4a1a6
 3. 

 ## The real stuff.
 1. PHP.
 2.<?php
   function getdigit($number) {

      $digit = array();
      $stringnumber = (string) $number;
    
    for ($i = 0; $i < strlen($stringnumber); $i++) {
        $digit[] = (int) $stringnumber[$i];
    }
    
    return $digit;
}
$number = 12345678;
$result = getdigit($number);
print_r($result);
?>

 3.
 <?php
 function toPigLatin($text) {
    $words = explode(' ', $text);
    $pigLatinWords = array();

    foreach ($words as $word) {
        $firstLetter = substr($word, 0, 1);
        $remaining = substr($word, 1);
        $pigLatinWord = $remaining . $firstLetter . 'ay';
        $pigLatinWords[] = $pigLatinWord;
    }

    return implode(' ', $pigLatinWords);
}

function fromPigLatin($text) {
    $words = explode(' ', $text);
    $englishWords = array();

    foreach ($words as $word) {
        $lastTwo = substr($word, -2);
        $remaining = substr($word, 0, -2);
        $englishWord = $lastTwo . $remaining;
        $englishWords[] = $englishWord;
    }

    return implode(' ', $englishWords);
}

$text = "Join with yellowfish";
$pigLatinText = toPigLatin($text);
echo "Pig Latin: " . $pigLatinText . "\n";

$englishText = fromPigLatin($pigLatinText);
echo "English: " . $englishText;
 ?>
 
 4. 
 <?php 
 function rotateArray(&$array, $k) {
    $n = count($array);
    $k = $k % $n; 
  
    reverseArray($array, 0, $n - 1);
    reverseArray($array, 0, $k - 1);
    
    reverseArray($array, $k, $n - 1);
}

function reverseArray(&$array, $start, $end) {
    while ($start < $end) {

        $temp = $array[$start];
        $array[$start] = $array[$end];
        $array[$end] = $temp;
        
        $start++;
        $end--;
    }
}

$array = [1, 2, 3, 4, 5, 6];
$k = 2;

rotateArray($array, $k);
print_r($array);
?>
 5. __*__ Create a URL shortener using Laravel.