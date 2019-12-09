<?php 
    // if(isset($_GET['name'])){
    //     $name= htmlentities($_GET['name']);  // htmlentities is ued to protect the websight from actacts and 
    //     // change the indut html tags like "<..>" brackets to entities
    //     echo $name;
    // }
    // this will only work only when the request is only get

    // if(isset($_POST['name'])){
    //     $name= htmlentities($_POST['name']);  // htmlentities is ued to protect the websight from actacts and 
    //     // change the indut html tags like "<..>" brackets to entities
    //     echo $name;
    // }
    // this will only work only when the request is only post

    if(isset($_REQUEST['name'])){
        $name= htmlentities($_REQUEST['name']);  // htmlentities is ued to protect the websight from actacts and 
        // change the indut html tags like "<..>" brackets to entities
        echo $name;
    }
    // this will work on both get and post

    echo $_SERVER['QUERY_STRING']; //this will return the request string

?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<!--
    <form method="GET" action="get_post.php">
        <div>
            <lable>Name</lable><br>
            <input type="text" name="name">
        </div>
        <div>
            <lable>Email</lable><br>
            <input type="text" name="email">
        </div>
        <input type="submit" name="Submit">
    </form>
-->
    <form method="POST" action="get_post.php">
        <div>
            <lable>Name</lable><br>
            <input type="text" name="name">
        </div>
        <div>
            <lable>Email</lable><br>
            <input type="text" name="email">
        </div>
        <input type="submit" name="Submit">
    </form>
    <ul>
        <li>    
            <a href='get_post.php?name=Brad'>Brad</a>   
        </li>
        <li>    
            <a href='get_post.php?name=Boi'>Boi</a>
        </li>
<!-- We are calling request manually here -->
    </ul>
    <?php if(isset($_GET['name'])): ?>
    <h1><?php echo "$name's Profile"; ?></h1>
    <?php endif; ?>
</body>
</html>