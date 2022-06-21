## About You.
1. My name is Athulya I am basically from Calicut .i have completed my schooling and graduation from Calicut itself. I have a bachelor degree in mathematics and master degree in computer application. I have total of 3 years working experience out of which I have worked 1 year as a TDL programmer and 2 year as Laravel developer. Currently I am working for Bpract as a Software developer. I have experience with Php,Mysql ,JavaScript and vuejs and the main projects that I have worked with are multilevel marketing software, betting software and lottery purchase software.
About my family: My family consist of 4 members my father my mother and an elder sibling.my father is currently not working my mother is homemaker and my brother works as tool designer at a private firm
About my hobbies: My hobbies include watching movies and travelling.

2. I am currently working with linux, also iam confortable working with windows.
The IDEs that i use are visual studio code and sublime text.for deployment we use laravel forge and also using hubstaf as task management

## Social Profile
1. Github profile url---https://github.com/Athulya-M
2. LinkedIn profile ---https://www.linkedin.com/in/athulya-m-/

## The real stuff.
1. programming languages installed--PHP
2. function that takes a number and returns an array of its digits

 ```php
function ArrayOfDigits($number){
		$number_string=strval($number);
		for ($i=0; $i <strlen($number_string); $i++) { 
 	$array[]=$number_string[$i];
		}
		return $array;
	}

 ```
 3. Pig Latin.


 ```php
 //Conver text to Pig Latin
function convertToPigLatin($text){
  $text_array=explode(" ", strtolower($text));
  $pig_latin="";
  for ($i=0; $i <count($text_array) ; $i++) {
  $text=strval($text_array[$i]);
  $converted = ltrim($text, $text[0]).$text[0]."ay"; 
  $pig_latin.=$converted." ";

  } 
return $pig_latin; 
}

//Convert Pig Latin to English
function convertFromPigLatin($text){
  $text_array=explode(" ", strtolower($text));
  $english="";
  for ($i=0; $i <count($text_array) ; $i++) {
  $removed=substr($text_array[$i], 0, -2);
  $last_char=$removed[strlen($removed)-1];
  $english.=$last_char.substr($removed, 0, strlen($removed)-1)." ";
  } 
return $english;
}


 ```

 4. Array Rotate.
 ```php
 function RotateArrayWithPosition($array,$position){
 for ($i = 0; $i < $position; $i++){ 
  $first_element = $array[0]; 
  for($j = 0; $j < count($array)-1; $j++){ 
   $array[$j] = $array[$j+1]; 
  } 
  $array[$j] = $first_element; 
 }
 return $array; 
 }

 ````

 5. Url Shortner Github--https://github.com/Athulya-M/URLshortner.git
	

