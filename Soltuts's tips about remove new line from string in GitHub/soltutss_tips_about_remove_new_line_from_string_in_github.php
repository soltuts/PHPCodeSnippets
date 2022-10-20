<?php 
    function removeNewline($str){
        return trim(preg_replace('/\s+/', ' ', $str));
    }
  
    $str = "Soltuts.com 
is providing 
PHP 
tutorials";
    $str = removeNewline($str);
    echo($str);

/*
Read more from https://soltuts.com/how-to-remove-new-line-from-string-php/
?> 