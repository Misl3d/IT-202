<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Register Screen</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
		}
		else{
			return true;
		}
	}
}
?>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" />
<head>
<script>
function validate(){
	var form = document.forms[0];
	var password = form.password.value;
	var conf = form.confirm.value;
	console.log(password);
	console.log(conf);
	let pv = document.getElementById("validation.password");
	let succeeded = true;
	if(password == conf){
		
		pv.style.display = "none";
	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		
		succeeded = false;
	}
}
</script>
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
       
	if(checkPasswords() === true ){
	echo "<div class='form'>
	<h3>Failed to register!</h3>
	<a href='login.php'>Login here!</a></div>";
	}

        else{
	    $query = "INSERT into `users1` (username, password, email, trn_date)
        VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
            echo "<div class='form'>
<h3>Successfuly registered an account!</h3>
<a href='login.php'>Login here!</a>
</div>";

        }
    }
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="password" name="confirm" placeholder="Re-Enter password"/>
<span style="display:none;" id="validation.password"></span>
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php ?>
</body>
</html>
