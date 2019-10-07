<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getName()
{
	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		echo "<p>Hello, " . $name . "</p>";
		echo "<br>";
	}
}
?>

<html>
<head>
	<script>
		function checkPassword(form)
		{   	
			if (form.password.value != form.confirm_password.value)
			{ 
                    		alert ("\nPasswords do not match: try again...") 
                    		return false;
			} 
  
                	else
			{ 
                    		return true; 
                	}
		}
	</script>
</head>
<body>
	<?php getName();?>
	<form method="POST" action="#" onSubmit="return checkPassword(this)">
		<input name="name" type="text" placeholder="username"/>
		<input name="password" type="password" id="password" placeholder="password"/>
		<input name="confirm_password" type="password" id="confirm_password" placeholder="confirm password"/>

		<input type="submit" value="Try it"/>
	</form>
	<br><a href="https://github.com/Misl3d/IT-202/blob/master/form.php">Github</a><br>
</body>
</html>

<?php
if(isset($_POST))
{
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>