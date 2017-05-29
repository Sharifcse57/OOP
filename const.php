<?php
//constat name should be upper case
//const HOST_NAME= "localhost";
//echo HOST_NAME;
//echo ini_set("display_error" , "On");
var_dump(error_reporting(E_ALL));
print_r(get_defined_vars());

?>


<?php

function ParentFunc() {

	function NestedFunc() {
		global $var;
		$var = $var + 5;
		return $var;
		echo NestedFunc() . "<br>";
		echo NestedFunc() . "<br>";
		echo NestedFunc() . "<br>";
	};
	function NestedFuncc() {
		global $var;
		$var = $var + 5;
		return $var;
	};

}
ParentFunc();

echo NestedFuncc() . "<br>";
echo NestedFuncc() . "<br>";
echo NestedFuncc() . "<br>";
?>