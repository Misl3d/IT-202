  
<?php
	echo "<pre>" . var_dump($_GET, true) . "</pre>";
	if(isset($_GET['name']))
	{
		$name = $_GET['name'];
		echo "<br>Hello, " . $name . "!<br>";
	}
	if(isset($_GET['number1']))
	{
		$number1 = $_GET['number1'];
		echo "<br>Checking if (" . $number1 . ") is a number.<br>";
		echo "<br>Doing the Numbers...";
		if (is_numeric($number1))
		{
			echo "<br>$number1 is a number!<br>", PHP_EOL;
		}
		else
		{
			echo "<br>$number1 is not a number. Try a different value.<br>", PHP_EOL;
		}
	}
	
	if(isset($_GET['number2']))
        {
                $number2 = $_GET['number2'];
                echo "<br>Checking if (" . $number2 . ") is a number.<br>";
                echo "<br>Doing the Numbers...";
                if (is_numeric($number2))
                {
                        echo "<br>$number2 is a number!<br>", PHP_EOL;
                }
                else
                {
                        echo "<br>$number2 is not a number. Try a different value.<br>", PHP_EOL;
                }
        }
	
    
    
    echo "<br>1. Numbers Added: " . ($number1 + $number2) . "<br>";
	
    echo "<br>2. This is a concatenation of values from different parameters: " . $name . $number1 . "<br>";
	
    echo "<br>3. The GET Function gets the numbers in the order they are given so the first number will always be overwritten by the next."; 
    echo '<a href="https://web.njit.edu/~pjz3/IT202/handleRequestData.php?name=Pat&name=Patryk&number1=6&number1=8"> https://web.njit.edu/~pjz3/IT202/handleRequestData.php?name=Pat&name=Patryk&number1=6&number1=8</a>';
    echo "<br>Number 1 is set as 6 then 8 but it keeps 8 as it comes last.<br>";
	
    echo "<br>4. Some special characters work like: !@^, but others do not work.";
    echo"<br>";
	echo '<a href="https://web.njit.edu/~pjz3/IT202/handleRequestData.php?name=Patryk&number1=^&*()_+=~`&number2=!@#%"> https://web.njit.edu/~pjz3/IT202/handleRequestData.php?name=Patryk&number1=^&*()_+=~`&number2=!@#%</a>';
    
    //web.njit.edu/~pjz3/IT202/handleRequestData.php?number1=a&number2=b
?>