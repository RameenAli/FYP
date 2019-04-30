<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
session_unset();
session_destroy();
echo"unset session";
header("location: login.php");

?>