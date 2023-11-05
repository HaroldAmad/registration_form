<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/plasticine/100/christmas-tree.png">
    <link rel="stylesheet" type="text/css" href="srcs/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title> Registration </title>
</head>
<body>
        
    <div>
        <img class="header" src="srcs/background.png">
    </div>

    <div class="grid">
        <div class="card">
            <img src="srcs/card.jpg">
        </div>

        <div class="">
            <form action="includes/signup.inc.php" method="post">
                <div class="register">
                    <div class="title"> REGISTER </div>
                </div>
                <div class="">
                    <div class="personal_info">
                        <div class="subtitle"> PERSONAL INFORMATION </div>
                        <div class="register">
                            <i class="fa fa-at icon"></i>
                            <!-- <label for="username">Username: </label> -->
                            <input type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="register">
                            <i class="fa fa-envelope icon"></i>
                            <!-- <label for="email">Email: </label> -->
                            <input type="email" name="email" placeholder="E-Mail" required>
                        </div>
                        <div class="register">
                            <i class="fa fa-key icon"></i>
                            <!-- <label for="pwd">Password: </label> -->
                            <input type="password" name="pwd" placeholder="Password" required>
                        </div>
                        <div class="register">
                            <i class="fa fa-user icon"> </i>
                            <!--<label for="firstname">First Name: </label>-->
                            <input type="text" name="firstname" placeholder="Firstname" required>  
                            <!-- <label for="surname">Surname: </label> -->
                            <input type="text" name="surname" placeholder="Surname" required>                
                        </div>
                        <div class="register">
                            <i class="fa fa-venus-mars icon"></i>
                            <!--<label for="gender">Gender: </label>-->
                            <select name="gender" required>
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="lgbtqia+">LGBTQIA+</option>
                                <option value="not">Prefer not to say</option>
                            </select>
                        </div>
                        <div class="register">
                            <i class="fa fa-birthday-cake icon"></i>
                            <!-- <label for="birthdate">Birthdate: </label required> -->
                            <input type="date" name="birthdate">
                        </div>
                    </div>
                </div>
                
                <div class="">
                    <div class="contact_info">
                        <div class="subtitle"> CONTACT INFORMATION </div>
                        <div class="register">
                            <i class="fa fa-phone icon"></i>
                            <!-- <label for="phone">Phone#: </label required> --> 
                            <input type="tel" name="phone" placeholder="09....." required>
                        </div>
                        <div class="register">
                            <i class="fa fa-map-pin icon"></i>
                            <!--<label for="region">Region: </label> -->
                            <input type="text" name="region" placeholder="Region" required>
                            <!-- <label for="city">City: </label> -->
                            <input type="text" name="city" placeholder="City" required>
                            <!-- <label for="barangay">Barangay: </label> -->
                            <input type="text" name="barangay" placeholder="Barangay" required>
                        </div>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <?php
            check_signup_errors();
            ?>
        </div>
    </div>
    
</body>
</html>