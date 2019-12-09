<?php

	// function is a block of code used is program repeatedly
	
	function SimpleFunction(){
		echo 'Hello World';
	}
	SimpleFunction();

	echo '<br>';

	function SayHello($name ='World'){
		echo 'Hello '.$name;
	}
	SayHello('Mike');

	echo '<br>';

	function AddNumbers($num1 =0, $num2 =0){
		return $num1 +$num2;
	}
	echo AddNumbers(5,10);

	// add by reference
	echo '<br>';
	$num1=1;

	function AddTen(&$num1){
		$num1 += 5;
	}
	AddTen($num1);
	echo $num1;
?>