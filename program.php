<?php

function main() {
	$alice = 0;
	$bob = 0;

	$a = array(1, 2, 3);
	$b = array(2, 3, 1);
	for ($i = 0; $i < 3; $i++) {
		if ($a[$i] != $b[$i]) {
			if ($a[$i] > $b[$i]) {
				$alice = 1;
			} else {
				$bob = 1;
			}
		}
		echo $alice;
		echo "<br>";
		echo $bob;
	}

}

main();

echo "<br>";

$abc = array();
$abc['one'] = "sharif";
$abc['two'] = "sharif";
$abc['three'] = "sharif";
print_r(json_encode($abc));

?>