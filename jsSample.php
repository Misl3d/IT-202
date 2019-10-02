<html>
<head>
	<script>
	//var myVar = 10;
	//alert("My var is " + myVar);
	console.log("Hello World");

	//var name = prompt("What's your name?";
	//alert("Hi, " + name);

	//var number = 0;
	//for(var i = 0; i < 10; i++){
		//number += 0.1;
	//}


	console.log("Added float is " + number);

	var myParagraph = document.getElementById("myPara");
	myParagraph.innerText = "Changed it";

	let number1 = parseInt(prompt("Pick a number"));
	let number2 = parseInt(prompt("Pick another number"));
	myParagraph.innerText = number1 + "+" +number 2 + "=";
	myParagraph.innerText += (number1+number2);
	console.log(myParagraph);
}


	</script>
</head>
<body onload="mySamples();">
	<p id="myPara"> Just showing that we loaded something...</p>
</body>
</html>
