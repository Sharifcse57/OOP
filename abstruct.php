<?php 
namespace folder;
class checkfolder{
	public function check(){
		echo "this is namespace";
	}
}


use folder as fold;
echo fold\checkfolder::check();

abstract class sharif{
		public function abc(){
				echo "this is abatract method";
		}
}

echo "<br/>";
class arif extends sharif{

}

$a= new arif();
$a->abc();
echo "<br/>";


interface xyz{
		public function abc();
}

class module implements xyz{
		public function abc(){
			echo "this is interface";
		}
}

$b= new module();
$b->abc();
echo "<br/>";



 ?>