// Write a PHP script that outputs the data in the table as an HTML table.  
<?php
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "deleteme");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Attempt select query execution
	$sql = "SELECT * FROM cars";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>Make</th>";
	                echo "<th>Model</th>";
	                echo "<th>Quantity</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['Make'] . "</td>";
	                echo "<td>" . $row['Model'] . "</td>";
	                echo "<td>" . $row['Quantity'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
	        // Close result set
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
	?>
