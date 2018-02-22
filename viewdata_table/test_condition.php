<!DOCTYPE html>
<html>
<head>
	<title>Test Condition</title>
</head>
<body>

	<?php 

		$x = 2;

       if ($x != 2) {
       	echo "TRUE";
       }else {
       	echo "FALSE <br>";  //this is the answer
       }


// on this 2nd statement

       $x = 1;

       if ($x != 2 ) {
       	echo "TRUE <br>"; //this is the answer
       }else {
       	echo "FALSE";
       }

       //on this 3rd statement
        $x = 2;

       if ($x == 2) {
       	echo "TRUE <br>"; //this is the answer
       }else {
       	echo "FALSE";
       }

       //on the 4th statement
      
       $x = 1;

       if ($x == 2) {
       	echo "TRUE "; 
       }else {
       	echo "FALSE <br>"; //this is the answer
       }

	?>

</body>
</html>