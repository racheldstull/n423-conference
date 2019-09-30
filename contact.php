<?php

// create page title value
$page_title = "ICDSE 2020 | Contact PHP Classic";
$css_route = "";

// create requires for the header and database
require_once ('includes/head.php');
require_once ('includes/connect.php');

?>

<div id="popup">
    <div class="text">
    </div>
</div>

<div class="content-body contact-content">
    <div class="form-container">
        <h1>Contact Us</h1>
        <form id="contactForm" method="get" action="process/processContact.php" enctype="text/plain">
            <div class="form-section top-formsec">
                <input id="addName-php" type="text" placeholder="Full Name" name="name" required>
                <input id="addEmail-php" type="text" placeholder="Email" name="email" required>
            </div>
            <div class="form-section middle-formsec">
                <input id="addSubject-php" type="text" placeholder="Subject" name="subject" required>
                <textarea  id="addMessage-php" rows="6" cols="50" name="message" form="contactForm" placeholder="Enter message here..." required></textarea>
            </div>
            <div class="form-section bottom-formsec">
                <input type="submit" name="Submit" id="Submit" value="CREATE" />
            </div>
        </form>
    </div>
</div>

<?php

require_once ('includes/footer.php');

?>