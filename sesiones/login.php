<?php

session_start();

$users = [
    array(
        "username" => "saul",
        "email" => "saul@gmail.com"
    ),
    array([
        "username" => "earvin",
        "email" => 'earvin@gmail.com'
    ])
];


$user = $_GET["user"] ?? "";

$_SESSION['id'] = $user;
$_SESSION['username'] = $users[$user]["username"];
$_SESSION['email'] = $users[$user]["email"];

