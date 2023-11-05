<?php
require_once "includes/login_model.inc.php";
require_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/plasticine/100/christmas-tree.png">
    <link rel="stylesheet" type="text/css" href="srcs/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Your+Font+Family" rel="stylesheet">
    <title> Ticket </title>
</head>
<body>
            
    <div>
        <img class="header" src="srcs/background.png">
    </div>
    <div class="button">
        <i class="fa fa-sign-out"></i>
        <a href="includes/logout.inc.php">Logout</a>
    </div>
    <?php
    session_start();
    $info = get_info($pdo, $_SESSION["user_id"]);
    ?>

    <div class="ticket">
        <div class="ticket_left"> 
            <div> 
                <h1> ADMIT ONE </h1> 
                <h2> Regular Fee </h2>  
                <p> 24th December 6 PM </p> 
                <p class="dots"> ................................. </p>  
            </div> 
        </div>
        <div class="ticket_right">
            <div class="title"> WELCOME TO CHRISTMAS WONDERLAND </div>
            <div> 
                <h1> <?php echo $info["first_name"];?>
                    <?php echo $info["surname"]; ?>! </h1>
            </div>
            <div class="user_credentials">
                <h2>First Name: <?php echo $info["first_name"];?> </h2>
                <h2>Last Name: <?php echo $info["surname"]; ?></h2>
                <h2>Region: <?php echo $info["region"]; ?></h2>
                <h2>City: <?php echo $info["city"]; ?></h2>
                <h2>Barangay: <?php echo $info["barangay"]; ?></h2>
            </div>

        </div>
    </div>
    

    

</body>
</html>