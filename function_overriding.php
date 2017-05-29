<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Overriding</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php

class Foo {
	function myFoo() {
		return "Foo";
	}
}

class Bar extends Foo {
	function myFoo() {
		return "Bar";
	}
}

$foo = new Foo;
$bar = new Bar;
echo ($foo->myFoo()); //"Foo"
echo "<br>";
echo ($bar->myFoo()); //"Bar"
?>

</body>
</html>