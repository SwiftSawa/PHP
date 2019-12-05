<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['name']);

        setcookie('username', $username, time()+3600);     //3600 is for 1hr or 3600 sec
        // setcolie( name_of_cokie, thr_value_of_cookie, aspiration_like_time);
        //this is to set the cookie

        header('Location: page2.php');
        //this is to take link the page to another page 
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
        <input type="submit" name="submit" value="submit">
    </form> 
</body>
</html>