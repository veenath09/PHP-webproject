
<?php
session_start();
session_destroy();
header('Location: Testlogin1.php');
exit;
?>