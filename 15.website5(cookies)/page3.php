<?php

    $user= ['name'=> 'Swager', 'email' => 'swagger@singh.com', 'age'=>21];

    $user= serialize($user);
    // we cant store cookies as array directly 
    // we can only save strings 
    // serialize save the array as string 

    setcookie('user', $user, time()+(86400*30));

    $user= $_COOKIE['user'];
    echo $user;     // user is in string form so printing a string

    echo '<br>';

    $user= unserialize($_COOKIE['user']);
    // unserialize trun encoded array as string to array

    print_r ($user);
?>