<?php 
    function getSubstringAfterLastSeparator($separator, $str){
        if (!isset($str) || trim($str) == '') {
            return "";
        }
        $wordArr = explode($separator, $str);
        $number = end($wordArr);
        return $number;
    }
    $str = "Soltuts.com is providing PHP tutorials";
    $str = getSubstringAfterLastSeparator(" ",$str);
    echo($str);

/*
Read more from https://soltuts.com/how-to-get-substring-after-last-separator-in-php/
*/
?> 