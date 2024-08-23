<?php 
// class A{
// 	public function abc(){
// 		echo "unstic";
// 	}
// 	public function abd(){
// 		$this-> abc();
// 	}

// }
// $a=new A();
// $a->abc();
// $a->abd();

// echo "<br>";
// echo "<br>";

// //inheritance 

//  class Abc{
//  	public function ghi(){
//  		echo "ghi";
//  	}
//  }
//  class Dec extends Abc {
//  	public function ghe(){
//  		$this->ghi();
//  	}
//  }
//  $acd=new Dec();
// echo "<br>";
// //over riding
// class Aa{
// 	public function abc(){
// 		echo "rama";
// 	}
// }
// class B extends Aa {
// 	public function abc(){
// 	echo "sita";
// }

// }
// $a=new B();
// $a-> abc();

// echo "<br>";
// echo "<br>";

// class A{
// 	public $a, $b;
// 	public function __construct($c,$d){
// 		$this->a=$c;
// 		$this->b=$d;
// 	}
// 	public function sum(){
// 		return $this->a+$this->b;
// 	}
// }
// $a=new A(8,9);
// echo $d=$a->sum();

echo "<br>";

trait abc{
	public function abc(){
		echo "maongo";
	}
}
class B{
	use abc; 
}
$abc=new B();
$abc->abc();




 ?>
