<?php

session_start();
$_SESSION = [];
session_unset(); // Corrected typo here
session_destroy();
header("Location: login.php");
exit;

?>
