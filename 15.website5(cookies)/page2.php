<?php

    setcookie('username', 'YO YO', time()+3600);    // this is used to reset the cookie

    // setcookie('username', 'YO YO', time()-3600);    // here we are distroing thr cookie


    if(count($_COOKIE)>0){              // here we are checking number of cookies saved
        echo 'There are'. count($_COOKIE). ' saved<br>';
    }else{
        echo 'No cookie Saved';
    }

    if(isset($_COOKIE['username'])){        //checking weather cookie is set or not and printing the value

        echo 'User '.$_COOKIE['username'].' is set.<br>';
        // header('Location: page2.php');
    }else{
        echo 'User is not set';
    }



?>