<?php
require_once '../includes/head.php';
?>

<script src="<?php echo $css_route; ?>lib/jquery-3.4.1.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-database.js"></script>
<!-- update the version number as needed -->
<script src="/__/firebase/6.6.1/firebase-app.js"></script>
<!-- include only the Firebase features as you need -->
<script src="/__/firebase/6.6.1/firebase-auth.js"></script>
<script src="/__/firebase/6.6.1/firebase-database.js"></script>
<script src="/__/firebase/6.6.1/firebase-firestore.js"></script>
<script src="/__/firebase/6.6.1/firebase-messaging.js"></script>
<script src="/__/firebase/6.6.1/firebase-storage.js"></script>
<!-- initialize the SDK after all desired features are loaded -->
<script src="/__/firebase/init.js"></script>
<script src="<?php echo $css_route; ?>app/firebaseModel.js"></script>
<script src="<?php echo $css_route; ?>app/firebaseUtility.js"></script>
<script src="<?php echo $css_route; ?>app/app.js"></script>
</body>
</html>