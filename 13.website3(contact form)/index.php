<?php
    // message vars
    $msg='';
    $msgClass='';
    if(filter_has_var(INPUT_POST, 'submit' )){
        // get form data 
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        // check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            // Passed
            // check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                //passed
                //send Email
                $toEmail= 'rainugursewaksingh@gmail.com';
                $subject= 'contact request from'.$name;
                $body= '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>'.
                        '<h4>Email</h4><p>'.$email.'</p>'.
                        '<h4>Message</h4><p>'.$message.'</p>';           
                //Email Headers
                $headers = "MIME-Version: 1.0"."\r\n";  // \r\n are for next line
                $headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
                // Additional Headers
                $headers .= "From: ".$name."<".$email.">"."\r\n";
                if(mail($toEmail, $subject, $body, $headers)){
                    // passed
                    $msg = 'Your Email has been sent';
                    $msgClass = 'alert-sucess';
                }else{
                    // fails
                    $msg = 'Your Email was not sent';
                    $msgClass = 'alert-danger';
                }
            }else{
                //false
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            }
        }else{
            // Failes
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact US</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css" />
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
            </div>
        <?php endif;?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <lable>Name</lable>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name'])? $name:'' ?>">
            </div>
            <div class="form-group">
                <lable>Email</lable>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email'])? $email:'' ?>">
            </div>
            <div class="form-group">
                <lable>Message</lable>
                <textarea type="text" name="message" class="form-control"\><?php echo isset($_POST['message'])? $message:'' ?>
                </textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>