<?php

    $dbhost = 'localhost';
    $dbuser = 'phpuser'; //cas username
    $dbpwd = 'phpuser'; //cas username
    $dbname = 'n423'; //cas username_db

    $link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    if(!$link){
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }

?>