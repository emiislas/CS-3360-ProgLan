<?php session_start(); 

?>


<html>
	
	<head>
		<title>Albertson's System</title>	
	</head>

	<body>	
	
	
	    <h2>Welcome to the System</h2>	
	    <form action="list.php" method='POST'>
			<br>
			User Name: 
			<br>
			<input type=text name="un">
			<br>
			Password: 
			<br>
			<input type=text name="pw">
			<br><br>
            <input type=submit name="begin" value = "log-in">
		
		

		
		</form>		
	</body>
</html>
