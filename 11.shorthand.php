<?php
    $loggedIn= true;
    $array =[1,2,3,4,5,6,7,8];
    if($loggedIn){
        echo 'You are logged in';
    }else{
        echo 'You are not logged in';
    }

    echo '<br>';
    echo ($loggedIn)?"You are logged in":"You are not logged in";
    echo '<br>';

    $isRegistered = ($loggedIn == true)?true:false;
    echo $isRegistered;

    echo '<br>';
    $age=20;
    $score=15;

    echo 'Your Score is'.($score > 10?(($age>10)?'Avergae':'Exceptional'):(($age>10)?'Horrible':'Average'));
?>

<div>
    <?php if($loggedIn){  ?>
        <h1>Welcome User</h>
    <?php }else{  ?>
        <h1>Welcome Guest</h1>
    <?php }?>
</div>

<div>
    <?php if($loggedIn):  ?>
        <h1>Welcome User</h>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif;?>
</div>

<div>
    <?php foreach($array as $element):  ?>
        <h3> <?php echo 'Output '.$element ?> </h3>
    <?php endforeach;?>
</div>