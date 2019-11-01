<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login Screen</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
session_start();

if (isset($_POST['username'])){

	$username = stripslashes($_REQUEST['username']);

	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

        $query = "SELECT * FROM `users1` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Something is incorrect.</h3>
<a href='login.php'>Login Here</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Login: </h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<br></br>
<input name="submit" type="submit" value="Login" />
<br></br>
</form>
<a href='registration.php'>Click to Register</a>
</div>
<?php } ?>
</body>
</html>
