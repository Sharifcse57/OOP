<?php 
class calculation{

			public $num1;
			public $num2;

			public function __construct($a,$b){

				echo "given value is {$a} and {$b}". "<br/>";
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


	}
			$obj= new calculation("10","2");
			$obj->add();
			$obj->sub();
			$obj->multiplication();
			$obj->division();

 ?>