<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/login.inc.php" method="post">
        <label for="email">Email: </label>
        <input type="text" placeholder="email" name="email">
        <label for="pwd">Password: </label>
        <input type="password" placeholder="Password" name="pwd">
        <button type="submit">Login</button>
        <a href="register.php">Sign Up!</a>
    </form>
</body>
</html>