<?php
    require 'config/db.php';

    if(isset($_GET['id'])){
        $query = 'SELECT * FROM posts WHERE id='.$_GET['id'];
    }
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Blog</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css";>
</head>
<body>
    <div class="container">
        <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?> </small>
        <p><?php echo $post['body']; ?></p>
    </div>
</body>
</html>