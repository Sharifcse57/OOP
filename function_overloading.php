<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>overloading</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <?php
//Who told you PHP doesn't support function overloading?!!!

//Actually PHP does support function overloading, but in a different way. PHP's overloading features are different from Java's:

//Overloading in PHP provides means to dynamically "create" properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.
function findSum() {
	$sum = 0;
	foreach (func_get_args() as $arg) {
		$sum += $arg;
	}
	return $sum;
}

echo findSum(1, 2), '<br />'; //outputs 3
echo "<br>";
echo findSum(10, 2, 100), '<br />'; //outputs 112
echo "<br>";
echo findSum(10, 22, 0.5, 0.75, 12.50), '<br />'; //outputs 45.75
echo "<br>";

class Foo {

	public function __call($method, $args) {

		if ($method === 'findSum') {
			echo 'Sum is calculated to ' . $this->_getSum($args);
		} else {
			echo "Called method $method";
		}
	}

	private function _getSum($args) {
		$sum = 0;
		foreach ($args as $arg) {
			$sum += $arg;
		}
		return $sum;
	}

}

$foo = new Foo;
$foo->bar1(); // Called method bar1
echo "<br>";
$foo->bar2(); // Called method bar2
echo "<br>";
$foo->findSum(10, 50, 30); //Sum is calculated to 90
echo "<br>";
$foo->findSum(10.75, 101); //Sum is calculated to 111.75

echo "<br>";

?>
</body>
</html>