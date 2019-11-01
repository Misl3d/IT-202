<?php
session_start();
echo "Hello, " . $_SESSION['username'];
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<p>Hi</p>
</html>
