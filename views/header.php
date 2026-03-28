<?php session_start();?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href="views/res/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="navbar">
            <ul class="left-link">
                <a href="timeline.php">
                    <li>&nbsp;</li>
                </a>
                <a href="timeline.php">
                    <li>Socmed C</li>
                </a>
             </ul>
            
            
            
            <?php if(isset($_SESSION['aid'])){ ?>
            <ul class="right-link">
                <a href="profile.php">
                    <li><?= $_SESSION['firstname']." ".$_SESSION['lastname'];?></li>
                </a>
                <a href="models/logout_account.php">
                    <li>Log out</li>
                </a>
             </ul>
            
            <?php }else{?>
             <ul class="right-link">
                <a href="login.php">
                    <li>Log in</li>
                </a>
                <a href="index.php">
                    <li>Sign up</li>
                </a>
             </ul>
            <?php }?>
            
        </div>
    </body>