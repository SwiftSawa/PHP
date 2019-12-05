<?php
// session_start => Start new or resume existing session, Session is used to take data over the visit to website 
// htmlentities => Convert all applicable characters to HTML entities, E.g converts <,> and other HTML tags
// header — Send a raw HTTP header, or to link a page on a click using PHP
?>


<?php
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['name']= htmlentities($_POST['name']);
        $_SESSION['email']= htmlentities($_POST['email']);
        header('Location: page2.php');
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email"  placeholder="Enter Email">
        <br>
        <input type="submit" name="submit" value="submit">
    </form> 
</body>
</html>