## About Me.

1.My name is Bincy Babu,I am liveing in palakkad,I have completed my Grauduation in Ammini college of 
  Engineering,I have completed my Higher-Secondary and high-school both  completed in cherupushpam girls school,I have total 2.9 years experience in php language,2.2 years in Laravel Framework and 7 months experience in codeigniter Framework,My strength is an adaptable person to changeing the conditions.

2. OS : windows, IDE:phpstorm, Editor: Sublime and visual-studio

## Social Profile

1.https://github.com/bincyyellowfish/Yellowfish
2.https://www.linkedin.com/in/bincy-babu-a0325621b/

## The real stuff.
1.Php 
2.takes a number and returns an array of its digits:
   <?php
    function ConvertToArray($num)
    {
      $a=array();
      $numdata=$num;
      $rem=0;
      for($i=0;$i<=strlen($num);$i++)
      {
        $rem=$numdata % 10;
        array_push($a,$rem);
        $numdata=$numdata/10;
      }
      echo $a;
    }
   ?>

3.translates a text to Pig Latin and back:


  <?php
     
     function PigLatin($str)
     {
      $strvalue=$str;
      $delimiter='';
      $words=explode($delimiter,$strvalue);
      $say=array();
      $pig='ay';
      foreach($words as $word)
      {
         array_push($say,strrev($word).$pig);

      }
      echo implode(" ",$say);
     }

   ?> 



4.rotates an array by k elements:

  <?php
   
   function RotateArray($rot,$arr)
   {
    $arrvalue=$arr;
    $rotateArray=array();
    for($i=0;$i<$rot;$i++)
    {
      array_push($rotateArray,$arrvalue[0]);
      $arrvalue=array_shift($arrvalue);
    }
    $arrvalue=array_merge($arrvalue,$rotateArray);
    echo $arrvalue;
   }

  ?>   

5.Create a URL shortener using Laravel:
  6. https://github.com/bincyyellowfish/Yellowfish (branch:master)
   download the source code and using migration to create a db

