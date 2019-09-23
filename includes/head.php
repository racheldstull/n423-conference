<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
    <!-- font face credit: https://befonts.com/ailerons-typeface.html -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<!-- International Conference for Deep Space Exploration -->

<nav>
    <div class="nav-left">
        <div class="logo-container">
            <a href="index.html"><img src="images/logo.png" alt="Logo for International Conference for Deep Space Exploration 2020"></a>
        </div>
    </div>
    <div class="nav-right">
        <div class="links-container-php">
            <a class="aNorm" href="index.html">Home</a>
            <a class="aNorm" href="index.html#about-section">About</a>

            <div class="dropdown dropdown-speakers">
                <a class="dropbtn" onclick="dropdownspeakers()">Speakers
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content dropdown-content-speakers">
                    <a href="speakers.php">PHP Ver.</a>
                    <a href="speakers.html">JS Ver.</a>
                </div>
            </div>

            <div class="dropdown dropdown-contact">
                <a class="dropbtn" onclick="dropdowncontact()">Contact
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content dropdown-content-contact">
                    <a href="contact.php">PHP Ver.</a>
                    <a href="contact.html">JS Ver.</a>
                </div>
            </div>

            <div class="dropdown dropdown-messages">
                <a class="dropbtn" onclick="dropdownmessages()">Message Center
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content dropdown-content-messages">
                    <a href="messages.php">PHP Ver.</a>
                    <a href="messages.html">JS Ver.</a>
                </div>
            </div>

            <a class="aNorm" href="schedule.html">Schedule</a>
            <a class="aNorm" href="rvsp.html">RVSP</a>
            <a class="aNorm" href="login.php">
                <i class='fas fa-user-astronaut'></i>
            </a>

        </div>
    </div>
</nav>