<?php
session_start();
session_destroy();
header("Location: phpch13.php");
exit;
?>
