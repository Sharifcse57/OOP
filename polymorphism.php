<?php 

//when we start to extend any class and specify any method or variable which is not present previously and even try to overrid the method is called polymorphism
// basis of polymorphism is inheritance and overriden methods

class calculation{
		public $num1;
		public $num2;

		public function __construct($a,$b){
		    $this->num1 = $a;
		    $this->num2 = $b;
		}

		public function add(){
		    echo "addition result is :" .($this->num1+$this->num2). "<br/>";
		}

		public function sub(){
		    echo "substruction result is :" .($this->num1-$this->num2). "<br/>";
		}

		public function multiplication(){
		    echo "multiplication result is :" .($this->num1*$this->num2). "<br/>";
		}
		public function division(){
		    echo "division result is :" .($this->num1/$this->num2). "<br/>";
		}

		public function display(){
			 echo "given value is {$this->num1} and {$this->num2}";
		}
	}

class admin extends calculation{
	public $level="2";
	public function display(){
			 echo "given value is {$this->num1} and {$this->num2} and their level is {$this->level}";
		}
	public static function sharif(){
		echo "sharif is not a good boy";
	}	
}

$obj= new calculation("10","2");
$obj->display();
echo "<br/>";
$obj->add();
$obj->sub();
$obj->multiplication();
$obj->division();

$admin_obj= new admin("10","2");
$admin_obj->level="administrator";
$admin_obj->display();
echo "<br/>";
admin::sharif();

echo "<br/>";

if($admin_obj instanceof calculation)
{
	echo "inherited";
}
 

 ?>