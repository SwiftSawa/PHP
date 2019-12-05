<?php
    session_start();

    $_SESSION['name']='Swagger Singh';

    $name =$_SESSION['name'];
    $email =$_SESSION['email'];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h5>Thank you <?php echo $name; ?> your Email is <?php echo $email; ?>.</h5>
    <a href="page3.php">Go to page 3</a>
</body>
</html>