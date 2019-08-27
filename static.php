<?php

		error_reporting(E_ALL^E_NOTICE);
		ini_set('display_errors','On');

		 class sdfsf{

		//public $bf= 's';
	 public	static  $fhf= 'df'; 

		static function test (){
			self::$fhf=23;	
		}
		
		static function get(){
			echo self::$fhf;
			
		}
	}
	sdfsf::test();
	sdfsf::get();
	sdfsf::$fhf=10;
	echo sdfsf::$fhf;
	
	
	
	// Inheritance test

class a{
		
static protected $test="class a";

	public function static_test(){
		echo "<br/>";
		echo static::$test; // Results class b
		echo "<br/>";
		echo self::$test; // Results class a

	}

}

class b extends a{

static protected $test="class b";

}

$obj = new b();
$obj->static_test();


$obj = new a();
$obj->static_test();
	
	
	
	
	
	echo "<h1> Third example</h1>";
	function somename() {
    static $var = 1;
    echo $var . "<br />";
    $var++;
}
somename();
somename();
somename();

	
	
	
	
	
	
	
	
?>