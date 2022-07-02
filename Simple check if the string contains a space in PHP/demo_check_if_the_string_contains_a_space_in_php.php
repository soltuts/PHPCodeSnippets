<?php 
 function haveOneSpaceBetween($str){
     $str = trim($str);
     $firstAppear = strpos($str, " ");
     $lastAppear = strrpos($str, " ");
     if ($firstAppear && $firstAppear == $lastAppear) {
         return true;
     }
     return false;
 }
 $str = "soltuts.com Tips,tricks,codesnippets";
 $str = haveOneSpaceBetween($str);
 var_dump($str);
   /*
	Readmore from https://soltuts.com/how-to-check-if-string-contains-only-a-space-in-php/
   */
?> 