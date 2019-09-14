<?php
include("php/connect.php");

$query = "SELECT id, firstName, lastName, description, title, img from conference";
$result = mysqli_query($link, $query);

$speakers = Array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){

    $speakers[] = Array( 	"id" => $row["id"],
        "firstName" => $row["firstName"],
        "lastName" => $row["lastName"],
        "description" => $row["description"],
        "title" => $row["title"],
        "img" => $row["img"] );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICDSE 2020 | Speakers</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- International Conference for Deep Space Exploration -->

<nav>
    <div class="nav-left">
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo for International Conference for Deep Space Exploration 2020">
        </div>
    </div>
    <div class="nav-right">
        <div class="links-container"></div>
    </div>
</nav>

<div class="content-body speaker-content">
    <h1>Speakers</h1>
    <div class="speaker-php">
        <?php
        foreach ($speakers as $speaker){
            echo '
                 <div class="speaker">
                    <div class="speaker-left">
                        <div class="img-container">
                            <img src="images/'.$speaker["img"].'" alt="'.$speaker["img"].'">
                        </div>
                     </div>
                     <div class="speaker-right">
                        <div class="speaker-desc">
                            <h1>'.$speaker["firstName"].' '.$speaker["lastName"].'</h1>
                            <h2>'.$speaker["title"].'</h2>
                            <p>'.$speaker["description"].'</p>
                        </div>
                     </div>
                 </div>';
        } //for each
        ?>
    </div>
</div>

<script src="lib/jquery-3.4.1.min.js"></script>
<script src="app/app.js"></script>
</body>
</html>