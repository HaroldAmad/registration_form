<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Username" required>
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="E-Mail" required>
        <label for="pwd">Password: </label>
        <input type="password" name="pwd" placeholder="Password" required>
        <label for="firstname">First Name: </label>
        <input type="text" name="firstname" placeholder="Firstname" required> 
        <label for="surname">Surname: </label>
        <input type="text" name="surname" placeholder="Surname" required>
        <label for="gender">Gender: </label>
        <select name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="lgbtqia+">LGBTQIA+</option>
            <option value="not">Prefer not to say</option>
        </select>
        <label for="birthdate">Birthdate: </label required>
        <input type="date" name="birthdate">
        <label for="phone">Phone#: </label required>
        <input type="tel" name="phone" placeholder="09....." required>
        <label for="region">Region: </label>
        <input type="text" name="region" placeholder="Region" required>
        <label for="city">City: </label>
        <input type="text" name="city" placeholder="City" required>
        <label for="barangay">Barangay: </label>
        <input type="text" name="barangay" placeholder="Barangay" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    check_signup_errors();
    ?>
</body>
</html>