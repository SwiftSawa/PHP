<?php	

	# Arrays- Variable that hold multiple variables
	/*
		- Indexed
		- Associative
		- Multi-Dimensional
	*/

	//index
	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 13);
	$cars = ['honda', 'toyota', 'ford'];
	$cars[3]= 'Jeep';
	$cars[]= 'BMW';			// this will automatically goes to last one

	echo count($cars);		// this tells length of array and print it too
	echo $people[2];
	echo $ids[2];
	echo $cars[2];
	echo $cars[3];
	echo $cars[4];
	print_r($cars);			// this show all elements of array and print it

	var_dump($cars);		// this print all features of th array and print it

	// Associative arrays 
	$people = array('Brad' => 35, 'Joe' => 32, 'Will'=> 33 );	// this is how key value pair works in php
	$ids = array(35 => 'Brad', 32 => 'Joe', 33=>'Will');
	$people['Jilli']=42;

	echo $people['Will'];
	echo $ids[32];
	echo $people['Jilli'];
	var_dump($people);

	// Multi-Dimensional arrays
	$cars=array(
 		array('Honda', 20, 10),
 		array('Toyota', 30, 20),
 		array('Ford', 40, 30)
		);
	$cars=[['Honda', 20, 10], ['Toyota', 30, 20]]; 		// this 2d array and above 2d array is same
	echo $cars[1][2];

?>