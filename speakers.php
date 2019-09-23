<?php

// create page title value
$page_title = "ICDSE 2020 | Speakers PHP Classic";

// create requires for the header and database
require_once ('includes/head.php');
require_once ('includes/connect.php');

$query = "SELECT * from speakers";
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

<div class="content-body speaker-content">
    <h1>Speakers</h1>
    <div class="speaker-php">
        <?php
        foreach ($speakers as $speaker){
            echo '
                 <div class="speaker">
                    <div class="speaker-left">
                        <div class="img-container">
                            <img src="images/' . $speaker["img"] . '" alt="' . $speaker["img"] . '">
                        </div>
                     </div>
                     <div class="speaker-right">
                        <div class="speaker-desc">
                            <h1>' . $speaker["firstName"] . ' ' . $speaker["lastName"] . '</h1>
                            <h2>' . $speaker["title"] . '</h2>
                            <p>' . $speaker["description"] . '</p>
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