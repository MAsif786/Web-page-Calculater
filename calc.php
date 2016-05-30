<?php

$a=$_POST['fn'];

$b=$_POST['sn'];

$solution=$_POST['radio'];


switch($solution){
	
	case "mul":
		
		echo $a*$b;
	
	break;
	
	case  "add":
		
		echo $a+$b;
	
	break;
	
	case "sub":
	
		echo $a-$b;
		
	break;
	
	case "div":
	
		echo $a/$b;

	
}



?>