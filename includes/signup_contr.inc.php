<?php

declare(strict_types=1);

function is_input_empty(string $username, string $email, string $pwd, string $first_name, string $surname, string $gender, string $birthdate, string $phonenum, string $region, string $city, string $barangay) 
{
    if (empty($username) || empty($email) || empty($pwd) || empty($first_name) || empty($surname) || empty($gender) || empty($birthdate) || empty($phonenum) || empty($region) || empty($city) || empty($barangay)){
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username) 
{
    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email) 
{
    if (get_email($pdo, $email) ) {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $username, string $email, string $pwd, string $first_name, string $surname, string $gender, string $birthdate, string $phonenum, string $region, string $city, string $barangay) 
{
    set_user($pdo, $username, $email, $pwd, $first_name, $surname, $gender, $birthdate, $phonenum, $region, $city, $barangay);
}
