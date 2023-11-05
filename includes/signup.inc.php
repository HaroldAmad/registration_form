<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $first_name = $_POST["firstname"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $phonenum = $_POST["phone"];
    $region = $_POST["region"];
    $city = $_POST["city"];
    $barangay = $_POST["barangay"];

    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        //ERROR HANDLERS
        $errors = [];

        if (is_input_empty($username, $email, $pwd, $first_name, $surname, $gender, $birthdate, $phonenum, $region, $city, $barangay)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username) ) {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email) ) {
            $errors["email_used"] = "Email already used!";
        }

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../register.php");
            die();
        }

        create_user($pdo, $username, $email, $pwd, $first_name, $surname, $gender, $birthdate, $phonenum, $region, $city, $barangay);

        header("Location: ../register.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}