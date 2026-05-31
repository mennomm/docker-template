<?php
$dbhost = 'mariadb';
$dbname = 'music_app';
$dbuser = 'root';
$dbpass = 'password';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if (!$conn){
    die('connection failed'. mysqli_connect_error());
}

