<?php

$arr = array();
$arrNew = array('first' => 'zamal', 'second' => 'murad', 'third' => 'noman');

$arr = ['first' => 'sharif',
	'second' => 'arif',
	'third' => 'jahid'];
$arr['new'] = $arrNew;
foreach ($arr as $firstArraykey => $firstValues) {

	if ($firstArraykey == 'new') {
		foreach ($firstValues as $secondArraykey => $secondArrayvalues) {
			echo $secondArrayvalues;
			echo "<br>";
		}
	}
	//echo $firstArraykey;
	echo "<br>";

}

echo "<br>";

$info = array(
	"pandu nagar" => array("ravi", "ramesh", "sunil"),
	"sharda nagar" => array("neeta", "meeta", "ritu"),
);

foreach ($info as $area => $locations) {
	foreach ($locations as $location) {
		echo "{$location} lives in {$area} <br />";
	}
}

?>