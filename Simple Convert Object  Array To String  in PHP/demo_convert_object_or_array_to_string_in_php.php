<?php 
    $str = array(1, 3, 4, 2, 22);
	$str = convertObjectOrArrayToString($str);
	print_r($str);
	echo "<br>";
	
	$p1 = new Point2D(1.233, 3.445);
	print_r(convertObjectOrArrayToString($p1));
	print "<br>";
	
    function convertObjectOrArrayToString($object, $space = "", $key = "", &$resultValue = ""){
		if (!is_object($object)) {
			if (is_array($object)) {
				$object = implode(",", $object);
			}
			$resultValue .= " - <b>$object</b><br/>";
		} else {
			if (isset($key) || trim($key) != '') {
				$resultValue .= ":<br/>";
			}
			$space .= "--";
			foreach (get_object_vars($object) as $key => $value) {
				if ((isset($key) || trim($key) != '') && isset($value)) {
					$resultValue .= $space . " " . $key . convertObjectOrArrayToString($value, $space, $key);
				}
			}
		}
		return $resultValue;
	}
	 class Point2D {
      var $x, $y;
      var $label;
	  
	  function getPoint()
      {
         return array("x" => $this->x, "y" => $this->y, "label" => $this->label);
      }
	   function Point2D($x, $y)
      {
         $this->x = $x;
         $this->y = $y;
      }
	}
   /*
	Readmore from https://soltuts.com/how-to-convert-object-or-array-to-string-in-php/
   */
?> 