<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION = array();

setcookie(session_name(), "", time() - 3600);

session_destroy();

$page_title = "ICDSE 2020 | Login PHP Classic";
$css_route = "";
require_once 'includes/head.php';
require_once 'includes/connect.php';

?>

<div class="logout">
    <h2>Logout</h2>
    <p>Thank you for your visit. You are now logged out.</p>
</div>

<?php

require_once ('includes/footer.php');

?>