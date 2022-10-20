<?php 
    function removeNumericFromLeftString($str){
        $i = 0;
        while ($i <= strlen($str) - 1 && !is_numeric($str[$i])) {
            $i++;
        }
        return substr($str, 0, $i);
    }
    $str = "Soltuts.com1234 is providing PHP tutorials";
    $str = removeNumericFromLeftString($str);
    echo($str);

/*
Read more from https://soltuts.com/how-to-remove-numbers-from-left-in-php/
*/
?> 