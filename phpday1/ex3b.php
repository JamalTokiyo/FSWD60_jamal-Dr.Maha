<!DOCTYPE html>
<html>
<head>
	<title>PHP current date</title>
</head>
<body>
<?php 
    $d=date('D');
    switch ($d) {
    	case 'Tue':
    		echo "Today is Monday";
    		break;
    	
    	case 'Tue':
    		echo "Today is Tuesday";
    		break;
    		case 'Wed':
    		echo "Today is Wednesday";
    		break;
    		case 'Thu':
    		echo "Today is Thursday";
    		break;
    		case 'Fri':
    		echo "Today is Friday";
    		break;
    		case 'Sat':
    		echo "Today is saturday";
    		break;
    		case 'Sun':
    		echo "Today is Sunday";
    		break;
    		default:
    		echo "i dont know, which day is it";
    }
    
 ?>

 

</body>
</html>