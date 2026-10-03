<?php 
session_start();
unset($_SESSION['key']);
session_destroy();
header("Location: index.php");
exit();
?>