<!DOCTYPE html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Validation
function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Passwords didn't match!<br>";
		}
	}
}
?>
<html>
<br><a href="https://github.com/Misl3d/IT-202/blob/master/registration.php">Github</a><br>
<br><br>
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
		form.confirm.className= "noerror";	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		form.confirm.className = "error";
		succeeded = false;
	}

	var email = form.email.value;
	var ev = document.getElementById("validation.email");
	if(email.indexOf('@') > -1){
		ev.style.display = "none";
	}
	else{
		ev.style.display = "block";
		ev.innerText = "Please enter a valid email address";
		succeeded = false;
	}
  
  var sel = document.getElementById("dd");
  if (sel.value == "") {
  alert("Please select an option!");
  return false;
  }
  return true;
}

//EMPTY CHECK
function checkIfEmpty() {
  if (document.getElementById('email').value == "" || document.getElementById('emailconfirm').value == ""){
    alert('Please enter an email address'); 
    return false; 
  }
  if (document.getElementById('password').value == ""|| document.getElementById('confirm').value == ""){
    alert('Please enter a password');  
    return false; 
  }
}
</script>

<style>
input { border: 1px solid black; }
.error {border: 1px solid red;}
.noerror {border: 1px solid black;}
</style>

</head>
<body>

<form method="POST" action="#" onsubmit="return checkIfEmpty() ;">
<input name="name" type="text" placeholder="Enter your name"/>
<br><br>
<input name="email" type="text" id="email" placeholder="name@email.com"/>
<input name="emailconfirm" type="text" id="emailconfirm" placeholder="Confirm Email"/>
<span id="validation.email" style="display:none;"></span>
<br><br>
<input type="password" name="password" id="password" placeholder="Enter Password"/>
<input type="password" name="confirm" id="confirm" placeholder="Confirm Password"/>
<span style="display:none;" id="validation.password"></span>
<br><br>
User Type:
<select id="dd">
  <option value="User">User</option>
  <option value="Admin">Admin</option>
  <option value="Mod">Mod</option>
</select>
<br><br>

<input type="submit" value="Submit" onclick="return validate()"/>
</form>
</div>
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>