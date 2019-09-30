<?php

//include code from database.php
$page_title = "ICDSE 2020 | Login PHP Classic";
$css_route = "../";

require_once '../includes/head.php';
require_once '../includes/connect.php';

function sanitize($item){
    global $link;  //to use $link within the scope of this function, you must use the keyword "global"
    $item = html_entity_decode($item);
    $item = trim($item);
    $item = stripslashes($item);
    $item = strip_tags($item);
    $item = mysqli_real_escape_string( $link, $item );
    return $item;
}

$username = '';
$password = '';
if(isset($_REQUEST["username"])) { $username = sanitize($_REQUEST["username"]); }
if(isset($_REQUEST["password"])) { $password = sanitize($_REQUEST["password"]); }

$user_id = 0; //this will be the id from the user table record
$role = 0; //this will be the role value from the user table record

$query = "SELECT id, firstName, lastName, joinDate, role from users
		  WHERE username = '".$username."'
		  AND password = '".$password."'";

$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) >= 1){
    $success = true;
}else{
    $success = false;
}

if ($success){
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $user_id = $row["id"]; //we will use this to determine if there is a log-in
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $joinDate = $row["joinDate"];
    $role = $row["role"];
    session_start();
    $_SESSION["user_id"] = $user_id;
    $_SESSION["role"] = $role;
}

session_write_close();

?>

<div class="wrapper">
    <h1 class="conference_title">The <b>Conference</b> Conference</h1>
    <h2 class="conference_title">Log In</h2>

    <section id="main_content">

        <?php
        if($user_id){
            echo '
				<div id="message_body">
                	<p>Welcome, '.$firstName.' '.$lastName.'!</p>
                    <p>You are now logged in.</p>
				</div> <!-- /message body -->
                <div id="return_link">
                    <a href="../logout.php">Log Out</a> 
                </div>  <!-- "return_link"-->';
        }else{
            echo '
				<div id="message_body">
                	<p>Something went very wrong, and we can\'t find your account.</p>
					<p>Sorry.</p>
				</div> <!-- /message body -->
                <div id="return_link">
                    <a href="../login.html">Return to Login Form</a> 
                </div>  <!-- "return_link"-->';
        }
        ?>

    </section>  <!-- "main_content"-->
</div>  <!-- /.wrapper -->
