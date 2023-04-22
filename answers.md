## About You.

 1. Myself Anju A R. I have done btech in ECE, also done a course in PHP. I worked as a Junior full stack developer in GalTech Technologies Pvt. Ltd. I have worked in Laravel framework for backend, also in React Js for one project. 
 2. I'm using windows, Visual studio code & xampp

## Social Profile
 1. https://github.com/anjuashokkumar
 2. https://www.linkedin.com/in/anju-a-r-a7560012a

## The real stuff.
 1. php
 2. 
 
   function arrayfn($num) {
      $number = (string) $num;
      $arr = [];
      for ($i = 0; $i < strlen($number); $i++) {
         if ($number[$i] != " ") { 
         $arr[] = $number[$i]; 
         }        
      }
      print_r($arr); 
   }
   arrayfn(2606);
 
 3. 
 
   function pigLatin($string) {
      $words = explode(' ', $string);
      $newString = implode(' ', array_map(function($i) {
         $first=substr($i,0,1);
         $word_minus=substr($i,1);
         $end="ay";
         return $word_minus.$first.$end;
      }, $words));
      return $newString;	
   }
   echo pigLatin("join with yellowfish");

 4. 
 
	function array_rotate_by_k($array, $k) {     
		for($i=0;$i<$k;$i++){
			$firstElement = array_shift($array);
			array_push($array, $firstElement);
		}
		return $array;
	}
	
	$array = [1,2,3,4,5,6];
	$k = 2;
	$out = array_rotate_by_k($array, $k);
	print_r($out);

 5. 
 https://github.com/anjuashokkumar/Shorten_Url
 

