<?php 
$Connection=mysqli_connect('localhost','root','','dbms');

$Delete_rollno=$_GET['Delete'];
$Delete_Query="UPDATE mess
			    SET fees = 0 
				WHERE rollno='$Delete_rollno' "
;

$Execute=mysqli_query($Connection,$Delete_Query);
if($Execute){


	echo "Record Updated Successfully";
}

 ?>