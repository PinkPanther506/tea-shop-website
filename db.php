<?php

    $servername = 'localhost';
    $username = 'mysql';
    $password = 'mysql';
    $DBname = 'teashop55';

    $mysqli = new mysqli($servername, $username, $password, $DBname);

    if ($mysqli -> connect_error) {
        die("connection failed: " . $mysqli->connect_error);
    }

?>