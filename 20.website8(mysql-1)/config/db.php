<?php
    //create connection
    $conn = mysqli_connect('localhost', 'root', 'gurswag', 'php_blog');
    //                       host        user    pass       dnname

    //check connection
    if(mysqli_connect_errno()){
        // connection failes
        echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }


?>