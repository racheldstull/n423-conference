<?php

// create page title value
$page_title = "ICDSE 2020 | Speakers PHP Classic";
$css_route = "";

// create requires for the header and database
require_once ('includes/head.php');
require_once ('includes/connect.php');

$query = "SELECT id, name, email, subject, message, timestamp from contacts
		  ORDER BY timestamp DESC	";
$result = mysqli_query($link, $query);

$messages = Array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	if($row["message"] < ' '){$row["message"] = "--No Message--";}

	$messages[] = Array(
							"name" => $row["name"],
							"email" => $row["email"],
							"subject" => $row["subject"],
							"message" => $row["message"],
                            "timestamp" => $row["timestamp"]);
} //while
?>

<div class="content-body message-content message-content-php">
    <?php
    if(count($messages) < 1){ echo '<div class="message-notice"> There are no messages at this time.</div>'; }

    foreach ($messages as $message){
        echo '	<div class="comment">
								<div class="message-header">'
            .$message["timestamp"].': <span>'.$message["name"].' &lt;'.$message["email"].'&gt;</span> wrote:
								</div>
								<div class="commentInfo">'.$message["subject"].' '.$message["message"].'</div>
								<a href="mailto:'.$message["email"].'">Reply</a>
							</div>  <!--/.message -->
							';
    }// foreach
    ?>
</div>

<?php

require_once ('includes/footer.php');

?>