<?php

$page_title = "ICDSE 2020 | Contact PHP Classic";
$css_route = "../";

require_once '../includes/head.php';
require_once '../includes/connect.php';

//retrieve, sanitize, and escape user's input from a form
$name = $link->real_escape_string(trim(filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING)));
$email = $link->real_escape_string(trim(filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL)));
$subject = $link->real_escape_string(trim(filter_input(INPUT_GET, 'subject', FILTER_SANITIZE_STRING)));
$message = $link->real_escape_string(trim(filter_input(INPUT_GET, 'message', FILTER_SANITIZE_STRING)));

//define the MySQL insert statement
$sql= "INSERT INTO contacts VALUES (NULL, '$name', '$email', '$subject', '$message', NULL)";

//execute the query
$query = @$link->query($sql);

//handle error
if(!$query) {
    $errno = $link->errno;
    $errmsg = $link->error;
    echo "Insertion failed with: ($errno) $errmsg<br/>\n";
    $link->close();
//    include 'includes/footer.php';
    exit;
}

echo "You're message has been received!";

$link->close();

//include 'includes/footer.php';