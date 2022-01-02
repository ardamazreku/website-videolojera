<?php

$server = 'localhost';
$user = 'root';
$password = '';
$dbName = 'videolojera';

$connect = mysqli_connect($server,$user,$password,$dbName);

if($connect -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connect-> connect_error;
    exit();
}

?>