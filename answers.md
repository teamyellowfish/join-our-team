## About me.

1.My name is Sajo Sunny,I have completed MCA in Saintgits college of engineering,pathamuttom.I have completed BCA in Sb Collge Chry,I am currently working in Kingslabs Technologies,Kakkanad-I have 1.5 years of experiance and my current location is Kottayam.I have 3 months self learn experiance in Laravel.My strength are Problem Solving,Thinking outside the square,Being a Good Team Player.

2. OS : Windows, IDE:VsCode, Editor: Notepad and Notepad++.

## Social Profile

1.github.com/sajo13/sajoyellowfish
2.linkedin.com/in/sajosunny/

## The real stuff.
1.Php,Angular js,node
2.Takes a number and returns an array of its digits:
    function ConvertToArray($num)
    {
      $MyArray = [];
      for ($i = 0; $i < strlen($num); $i++) {
		if ($num[$i] != " ") { 
		  $MyArray[] = $num[$i]; 
		}        
	  }
	  print_r($MyArray);die; 
	}
	ConvertToArray("123456");

3.translates a text to Pig Latin and back(“Join with yellowfish” => “oinjay ithway ellowfishyay”).
    <?php
	function isVowel($c)
	{
		return ($c == 'A' || $c == 'E' ||
				$c == 'I' || $c == 'O' ||
				$c == 'U' || $c == 'a' ||
				$c == 'e' || $c == 'i' ||
				$c == 'o' || $c == 'u');
	}
	
	function pigLatin($string_value)
	{
		$index = -1;
		for ($i = 0; $i < strlen($string_value); $i++)
		{
			if (isVowel($string_value[$i]))
			{
				$index = $i;
				break;
			}
		}
		if ($index == -1)
			return "-1";

		return substr($string_value, $index)
			   . substr($string_value, 0, $index)
			   . "ay";
	}
	$strvalue = "Join with yellowfish";
	$words=explode(" ",$strvalue);
    foreach($words as $word)
    {
        $str = pigLatin($word);
		if ($str == "-1")
			print_r('No vowels found' . '<br>');
		else
			print_r($str ." ");
    }
    ?>

4.rotates an array by k elements([1,2,3,4,5,6] rotated by two becomes [3,4,5,6,1,2]).    
	<?php
	function RightRotate($a, $n, $k)
	{
		$k = $k % $n;
		for ($i = 0; $i < $n; $i++) {
			if ($i < $k) {
				print_r($a[$n + $i - $k] . " ");
			}
			else {
				print_r(($a[$i - $k]) . " ");
			}
		}
		print_r("<br>");
	}
	$Array = [1, 2, 3, 4, 5, 6];
	$N = sizeof($Array);
	$K = 4;
	
	RightRotate($Array, $N, $K);
	?>

5.Create a URL shortener using Laravel:
6. github.com/sajo13/sajoyellowfish (branch:master)
   using migration to create a db