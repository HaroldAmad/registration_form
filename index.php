<?php
require_once 'includes/config_session.inc.php';
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/login.inc.php" method="post">
        <label for="username">Username: </label>
        <input type="text" placeholder="username" name="username">
        <label for="pwd">Password: </label>
        <input type="password" placeholder="Password" name="pwd">
        <button type="submit">Login</button>
        <a href="register.php">Sign Up!</a>
    </form>
    <?php
    check_login_errors();
    ?>
</body>
</html>