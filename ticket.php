<?php
require_once "includes/login_model.inc.php";
require_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $info = get_info($pdo, $_SESSION["user_id"]);
    ?>
    <h1>First Name: <?php echo $info["first_name"];?></h1>
    <h2>Last Name: <?php echo $info["surname"]; ?></h2>
    <h2>Region: <?php echo $info["region"]; ?></h2>
    <h2>City: <?php echo $info["city"]; ?></h2>
    <h2>Barangay: <?php echo $info["barangay"]; ?></h2>
</body>
</html>