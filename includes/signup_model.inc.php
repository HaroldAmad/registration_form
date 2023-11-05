<?php

declare(strict_types=1);

function get_username(object $pdo, string $username) 
{
    $query = "SELECT username FROM users where username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email) 
{
    $query = "SELECT email FROM users where email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $email, string $pwd, string $first_name, string $surname, string $gender, string $birthdate, string $phonenum, string $region, string $city, string $barangay)
{
    $query = "INSERT INTO users (username, email, pwd, first_name, surname, gender, birthdate, phonenum, region, city, barangay) VALUES (:username, :email, :pwd, :first_name, :surname, :gender, :birthdate, :phonenum, :region, :city, :barangay);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":first_name", $first_name);
    $stmt->bindParam(":surname", $surname);
    $stmt->bindParam(":gender", $gender);
    $stmt->bindParam(":birthdate", $birthdate);
    $stmt->bindParam(":phonenum", $phonenum);
    $stmt->bindParam(":region", $region);
    $stmt->bindParam(":city", $city);
    $stmt->bindParam(":barangay", $barangay);
    $stmt->execute();
} 