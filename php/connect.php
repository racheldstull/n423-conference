<?php

    $dbhost = 'localhost';
    $dbuser = 'rdstull'; //cas username
    $dbpwd = 'rdstull'; //cas username
    $dbname = 'rdstull_db'; //cas username_db

    $link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    if(!$link){
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }

?>