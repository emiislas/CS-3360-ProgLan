<?php session_start(); 
	if(isset($_POST['begin'])){
		$_SESSION['myArray'] = array();
		
	}
?>


<html>
	<!--- HTML CODE --->
	<head>
		<title>Albertson's System</title>	
	</head>

	<body>	
	
		<!--- Input to item list 3 params --->
	    <h2>Item List:</h2>	
	    <form action="list.php" method='POST' id="myMain">
            Item Name: <input type=text name="it">
			<br><br>
            PLU: <input type=text name="plu">
            <br><br>
			Image Link: <input type=text name="imag">
			<br><br>

            <input type=submit name="s">
			<input type=submit name="c" value = "Clear">
			<br><br>
			
	    
		<?php
			//clear button, resets array
			if(isset($_POST['c'])){
					session_unset();
					$_SESSION['myArray'] = array();
					echo"Cleared!";
					return;
				}
			
				
			// if submited
			if(isset($_POST['s'])){
				if(empty($_POST['it']) || empty($_POST['plu'])){//stops empty submits
					echo  "you must add an item and plu";
					return;
				}
				
				//new variables for inputs for easier use
				$imurl=$_POST['imag']; 
				$a=$_POST['it'];
				$b=$_POST['plu'];
				$image = "";
				if(!empty($_POST['imag'])){ // reformat image (smaller)and concatenated inputs
					$image = "<img src='$imurl' width = '50' height= '50'/>";
					$input = $a . " " . $b . " " . $image;
				}
				else{
					$input = $a . " " . $b;
				}


				array_push($_SESSION['myArray'], $input); //pushing into session array
				$arr = $_SESSION['myArray'];
				natsort($arr); // sorting algorithm
				
				foreach($arr as $i){ // iterating through array
					
					echo "<br/><input type='checkbox'/> $i<br>";

				}
		   }
		   
		?>
		
		</form>		
	</body>
</html>
