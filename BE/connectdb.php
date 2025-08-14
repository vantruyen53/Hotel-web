<?php
    define('DB', 'localhost');
    define('DB_userName', 'root');
    define('DB_passWord', 'abcde!@#$%');
    define('DB_DATABASE', 'cherryBlossom');

    $connect = new mysqli(DB, DB_userName, DB_passWord, DB_DATABASE);

    if($connect ->connect_errno){
        die('Connect failed: ' . $connect ->connect_errno);
    };
?>