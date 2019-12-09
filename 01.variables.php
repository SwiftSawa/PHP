<?php
	// this is for comment
	# this is also comment

	/*
	this is multiline comment
	*/

	/*
		- prefix $ => we need to do that beacuse it will understand it not as variable 
		- Start with the letter or _
		- letter numbers and _ 
		- case sensitive
	*/	

	#data types
		/*
			- String
			- Intergers
			- float
			- booleans
			- arrays or objects
			- NULL
			- resourcc
		*/

	$output = 'Hellow World	';

	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2;
	echo $sum;

	$string1 = 'Hello';
	$string2 = 'World';
	$outString1 = $string1.' '.$string2;  // this is how we concadinate in php
	echo $outString1;	

	$outString2 = "$string1 $string2";
	echo $outString2;

	$string3 = 'They\'re Here';
	echo $string3;

	define('GREATING', 'Hello Everyone');		// here a default is created named GREATING
	echo GREATING;								// this is how define is called		

	$float = 10.5;
	$bool1 = true;

	



?>