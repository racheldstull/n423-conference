<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION = array();

setcookie(session_name(), "", time() - 3600);

session_destroy();

$page_title = "Logout";
$css_route = "../";
include('../includes/connect.php');

?>

<div class="logout">
    <h2>Logout</h2>
    <p>Thank you for your visit. You are now logged out.</p>
</div>