<?php
    function compareTwoArray(array $array1, array $array2){
        if (count($array1) != count($array2)) {
            return false;
        }
        $arrayDiff = array_diff($array1, $array2);
        if (!empty($arrayDiff) || count($arrayDiff) > 0) {
            return false;
        }
        return true;
    }

    $input_array1 = array("Soltuts.com", "tutorials", "tips");
    $input_array2 = array("Soltuts.com", "snippets", "tips");
    var_dump(compareTwoArray($input_array1, $input_array2));

/*
Read more from https://soltuts.com/how-to-compare-two-array-values-in-php/
?> 