<?php

function sum($num1,$num2)
{
	echo $num1 +$num2;
}

if (isset($_POST['submit'])) {
	
	$number1=$_POST['number1'];
	$number2=$_POST['number2'];

   echo "<h1>";
	sum($number1,$number2);
   echo "</h1>";
}
?>