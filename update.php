<?php
$link = mysqli_connect("localhost", "root", "", "deleteme");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE cars SET Quantity = '800' WHERE MODEL = 'Corolla' ";
if(mysqli_query($link, $sql)){
    echo "Table updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
