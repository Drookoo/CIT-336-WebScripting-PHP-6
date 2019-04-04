// Insert data 

<?php
$link = mysqli_connect("localhost", "root", "", "deleteme");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "INSERT INTO cars (Make, Model, Quantity) VALUES ('Audi', 'A4', '30')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
