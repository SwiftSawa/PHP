<?php
    session_start();
    $name = isset($_SESSION['name'])?$_SESSION['name']:'';
    $email =isset($_SESSION['email'])?$_SESSION['email']:'';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h5>Thank you <?php echo $name; ?> your Email is <?php echo $email; ?>.</h5>
</body>
</html>