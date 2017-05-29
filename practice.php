<?php 


class person{
	protected $num1;
	public $num2;

	public function __construct($a,$b){
				$this->num1=$a;
				$this->num2=$b;

	}

	public function display(){
		echo "first number is {$this->num1} and second number is {$this->num2}";
		echo "<br/>";
		echo "this is super class and first value is :".$this->num1;
	}
}


class student extends person{
    public $course="Math 147"; 
	public function display(){
		echo "first number is {$this->num1} and second number is {$this->num2} and their course is {$this->course}";
		echo "<br/>";
		echo "this is sub class and first value is :".$this->num1;
	}

}

$obj= new person("4","5");
$obj->display();
echo "<br/>";
$student_obj= new student("4","5");
$student_obj->display();
echo "<br/>";

echo $obj->num2;


 ?>