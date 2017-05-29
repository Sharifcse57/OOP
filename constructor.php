<?php 

class person{
	public $name;
	public $age;


	public function __construct($name,$age){
		$this->name= $name;
		$this->age= $age;

	}
	public function personDetails(){
		echo "person name is  {$this->name}  and his age is  {$this->age}";
	}
}

$obj = new person("shairf","25");
$obj->personDetails();


?>