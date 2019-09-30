<?php

$page_title = "ICDSE 2020 | Login PHP Classic";
$css_route = "";

require_once 'includes/head.php';
require_once 'includes/connect.php';

?>
<div class="content-body login-content">
    <h2>Login</h2>

    <div class="form-container">
        <!-- display the login form -->
        <div class="login">
                <form id="loginForm" method="get" action="process/processLogin.php" enctype="text/plain">
                    <div class="form-section middle-formsec">
                        <input id="username-php" type="text" placeholder="Username" name="username" required>
                        <input id="password-php" type="text" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-section bottom-formsec">
                        <input type="submit" name="Submit" id="Submit" value="Login/Register" />
                    </div>
                </form>
        </div>
        <a href="#" id="signin-google">Signin with Google</a>
    </div>
</div>

<?php

require_once ('includes/footer.php');

?>