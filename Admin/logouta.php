<?php
session_start();
unset($_SESSION['email']);
session_destroy();

$_SESSION['out']="Logout Successfully";

header("Location: logina.php");
exit;
?>