<?php
//  session_destroy => Destroys all data registered to a session
//  unset => Unset a given variable
?>

<?php
    session_start();
  //  unset($_SESSION['name']);
    $email =$_SESSION['email'];
    session_destroy();
?>