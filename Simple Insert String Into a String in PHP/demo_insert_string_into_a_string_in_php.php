<?php 
   $str = "Hello ";
   $subStr = " world";
   $st = addSubStr2Pos($str, $subStr, 5);
   echo($st);
   function addSubStr2Pos($str, $subStr, $position){
       if (!isset($str) || trim($str) === '') {
           return "";
       }
       return substr_replace($str, $subStr, $position, 0);
   }
   
   /*
	Readmore from https://soltuts.com/how-to-insert-a-string-into-another-string-in-php/
   */
?> 