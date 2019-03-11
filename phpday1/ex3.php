<!DOCTYPE html>
<html>
<head>
	<title>PHP current date</title>
</head>
<body>
<?php 
    $dd=date('dd');
    if($dd=='Monday')
    	echo "have a nice day!";
    else
    	echo "today is Tuesday";
 ?>
</body>
</html>