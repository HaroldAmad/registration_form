<?php
require_once 'includes/config_session.inc.php';
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/plasticine/100/christmas-tree.png">
    <link rel="stylesheet" type="text/css" href="srcs/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Log In</title>
</head>
<body>
    
    <div>
        <img class="header" src="srcs/background.png">
    </div>

    <div class="container">
        <div class="user_credentials">
            <div class="title"> LOG IN </div>
            <form action="includes/login.inc.php" method="post">
                    <div class="login">
                        <i class="fa fa-user icon"></i>
                        <!--<label for="username"> USERNAME </label>-->
                        <input type="text" placeholder="Username" name="username">
                    </div>
                    <div class="login">
                        <i class="fa fa-key icon"></i>
                        <!--<label for="pwd"> PASSWORD </label> -->
                        <input type="password" placeholder="Password" name="pwd">
                    </div>
                    <div class="login">
                        <button type="submit">Login
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                    <div class="button">
                        <a href="register.php">Sign Up!</a>
                        <i class="fa fa-sign-in"></i>
                    </div>
            </form>
        </div>

        <?php
        check_login_errors();
        ?>
    </div>
</body>
</html>