<?php

// create page title value
$page_title = "ICDSE 2020 | Contact PHP Classic";

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
        <form id="contactForm" method="post" action="process/processContact.php" enctype="text/plain">
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

<script src="lib/jquery-3.4.1.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-database.js"></script>
<script src="app/firebaseUtility.js"></script>
<script src="app/app.js"></script>
</body>
</html>