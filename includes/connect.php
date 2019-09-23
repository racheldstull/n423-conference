<?php

    //Web4 Login
//    $dbhost = 'localhost';
//    $dbuser = 'rdstull'; //cas username
//    $dbpwd = 'rdstull'; //cas username
//    $dbname = 'rdstull_db'; //cas username_db

    //XAMPP Login
    $dbhost = 'localhost';
    $dbuser = 'phpuser';
    $dbpwd = 'phpuser';
    $dbname = 'n423';

    $link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    if(!$link){
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }

?>