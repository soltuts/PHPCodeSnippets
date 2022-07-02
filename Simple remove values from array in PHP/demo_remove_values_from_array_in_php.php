<?php 
function removeValueArray(&$valueInput = null, $key = ""){
    if (is_array($valueInput)) {
        foreach ($valueInput as $key => $value) {
            $valueInput[$key] = removeValueArray($value, $key);
        }
        if (isset($key) || trim($key) != '') {
            return $valueInput;
        }
    } else {
        if (isset($key) || trim($key) != '') {
            return null;
        }
    }
}
$arr = array(1, 3, 4, 2, 22);

echo "Array Before remove value:";
print_r($arr);
echo "<br/>";
echo "Array After remove value:";
$arr = removeValueArray($arr);
print_r($arr);
/*
Readmore from https://soltuts.com/how-to-remove-values-from-an-array-in-php/
*/
?> 