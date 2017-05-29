<?php 

//interface is a empty class here only functions are defined without any body part


interface school{
	public function myschool();
}

class teacher implements school{

	public function __construct(){
		$this->myschool();
	}
	public function myschool(){
		echo "i am a teacher";
	}


}

$obj=new teacher();

 ?>