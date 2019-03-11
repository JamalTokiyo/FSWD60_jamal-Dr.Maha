<!DOCTYPE html>
<html>
<head>
	<title>Exc02</title>
	<link rel="stylesheet" type="text/css" href="exc01.css">
</head>
<body>

<?php
/*echo "Exc02 <br/>";
$d=date("D");
if ($d=="Mon")
echo "Happy Monday!";
else
echo "Have a nice day!" ;
echo "<br>";
echo "<br>";*/
echo "Exc05 <br/>";

$numbers = array(2,5,4,6,8,9,1,7,3,5);

foreach($numbers as $value){
	echo "Value is $value <br /> ";
}
$numbers[0] = "two";
$numbers[1] = "five";
$numbers[2] = "four";
$numbers[3] = "six";
$numbers[4] = "eight";
$numbers[5] = "nine";
$numbers[6] = "one";
$numbers[7] = "seven";
$numbers[8] = "three";
$numbers[9] = "five";
foreach( $numbers as $value )
{
echo "Value is $value <br />";
}
?>

</body>
</html>