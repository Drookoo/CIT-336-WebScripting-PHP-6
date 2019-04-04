<?php
$first_number = 2; 
$second_number = 3;
$result = $first_number + $second_number;
echo 'The sum of my two numbers is ',$result;
echo "<br>";

$first_string = 'I have ';
$second_string = ' ducks!';

echo "<br>";
echo $first_string . $result . $second_string;

echo "<br>";
echo "<br>";

date_default_timezone_set('America/New_York');
$date = date('H');
if ($date % 2 == 0){
	echo 'Even';
}
else{
	echo 'Odd';
}

?>
