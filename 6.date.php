<?php
	echo date('d');		//day
	echo '<br>';
	echo date('m');		//month
	echo '<br>';
	echo date('Y');		//Year
	echo '<br>';
	echo date('l');		//day of the week
	echo '<br>';

	echo date('d/m/Y, l');		//it will print all date, month, year and day
	echo '<br>';

	echo date('h');		//hour
	echo '<br>';
	echo date('i');		//minuts
	echo '<br>';
	echo date('s');		//seconds
	echo '<br>';
	echo date('a');		//am or pm
	echo '<br>';	

	date_default_timezone_set('Asia/Calcutta');		// set time zone	

	echo date('h:i:sa');		//print all hour minuts secounds and am or pm 
	echo '<br>';

	$timeStamp = mktime(10,15,54,9,10,1981); 	// it give us secound difference between jan 1 1970 (Unix Epoch)
	echo $timeStamp;
	echo '<br>';

	echo date('m/d/Y h:i:sa', $timeStamp);		//this will give all details of timeStamp in date and time format
	echo '<br>';

	$timeStamp2 = strtotime('7:00pm March 22 2016');
	echo $timeStamp2;
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timeStamp2);

	$timeStamp3 = strtotime('tommorrow');
	$timeStamp4 = strtotime('next Sunday');
	$timeStamp5 = strtotime('+2 days');
	$timeStamp6 = strtotime('+3 months');
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timeStamp3);
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timeStamp4);
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timeStamp5);
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timeStamp6);
	

?>