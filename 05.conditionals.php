<?php
	
	/*
		==
		===	 this is same is JS it will also check data type
		>
		<
		<=
		>=
		!=
		!==
	*/

	$num =6;
	if($num == 5){
		echo '5 passed';
	}elseif($num == 6){
		echo '6 passed';
	}else{
		echo '5 not passed';
	}
	// We can also use nested if

	/*	
		and   &&
		or    ||
 		xor
	*/
 	echo '<br>';
 	if ($num >4 || $num< 10) {
 		echo 'true';
 	}else{
 		echo 'false';
 	}

 	// Switches
	echo '<br>';
 	$favColor = 'red';
 	
 	switch($favColor){
 		case 'red':
 			echo 'Your Favorate color is Red';
 			break;
 		case 'blue':
 			echo 'Your Favorate color is blue';
 			break;
 		case 'white':
 			echo 'Your Favorate color is white';
 			break;
 		case 'black':
 			echo 'Your Favorate color is black';
 			break;
 		default:
 			echo 'Your gavorate color is something else';
 	}
?>