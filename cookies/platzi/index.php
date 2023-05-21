<?php

if (!isset($_COOKIE["example_cookie"])) {

    setcookie(
        name: "example_cookie",
        value: "un michi salvaje",
        expires_or_options: 0,
        path: "/",
        domain: "localhost",
        secure: true,
        httponly: false
    );

    echo "¡Cookie creada!";
}





echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
