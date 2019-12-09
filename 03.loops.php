<?php
	
	// for loop
	// while loop
	//do..while
	//ForEach


	// for
	for($i=0; $i<10; $i++){
		echo $i;
		echo '<br>';
	}

	// while
	echo '<br>';
	echo '<br>';
	$i=0;
	while($i<10){
		echo $i;
		echo '<br>';
		$i++;
	}

	// do While
	$i=0;
	echo '<br>';
	echo '<br>';
	do{
		echo $i;
		echo '<br>';
		$i++;
	}while($i<10);

	// for each loop - for arrays

	echo '<br>';
	echo '<br>';
	$people = array('Kevin', 'Jeremy', 'Sara');

	foreach ($people as $person) {		// foreach ('name if the array' as 'name of var for each element called in 																											loop')
		echo $person;
		echo "<br>";
	}

	echo '<br>';
	echo '<br>';

	$ids = array(35 => 'Brad', 32 => 'Joe', 33=>'Will');
	foreach ($ids as $id => $person) {		// key value pair print
		echo $person.' '. $id;
		echo "<br>";
	}

?>