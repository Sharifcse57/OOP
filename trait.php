<?php

trait java {
	public function javacoder() {
		return "This is java";
	}
}

trait php {
	public function phpcoder() {
		return "This is php";
	}
}
trait javaPhp {
	use java;
	use php;
}
class course {
	use javaPhp;
}

$a = new course();
echo $a->javacoder();
echo "<br/>";
echo $a->phpcoder();

?>