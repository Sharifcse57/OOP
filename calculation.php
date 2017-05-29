<?php

class calculation{

public $num1;
public $num2;


public function add($a,$b){

    echo "sum result is :" .$a+$b;
}

}

$obj= new calculation();
$obj->add("4","5");