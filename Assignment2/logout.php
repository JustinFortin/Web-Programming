<?php
session_start();
$_SESSION["valid_login"] = False;
header('Location: login.php');
exit;
?>