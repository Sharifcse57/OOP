<?php 
class calculation{
			public static $num1="30";
			public $num2;
			const NAME ="shariful islam chowdhury";
			public static function display(){
			echo "full name is   ".calculation::NAME. "  and age is ".self::$num1;
			}
	}	
	calculation::display();

 ?>
