<?php

abstract class A{

	public function abc1(){
		
	}

	abstract public function abc();
	abstract public function dec();
}

class B extends A{
	public function abc(){
     echo "sdsdd";
	}

	public function dec(){
		 echo "ghi";
	}

}

$a= new B();
$a->abc();



interface G{

	public function abl();
	public function abl2();
}
interface k{

	public function ab2l();
	public function abl24();
}

class J implements G,K{
	public function abl(){
	  echo "sdsd";
	}

	public function abl2(){
	 echo "sdsd1";
	}

}

$c= new J();

$c->abl();

?>