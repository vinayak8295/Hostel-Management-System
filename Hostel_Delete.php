<?php 
$Connection=mysqli_connect('localhost','root','','dbms');

$Delete_Hostel_id=$_GET['Delete'];
$Delete_Query="DELETE FROM hostel
				WHERE hostel_id='$Delete_Hostel_id' "
;

$Execute=mysqli_query($Connection,$Delete_Query);
if($Execute){
	echo '<script>window.open("hostel_view.php?Deleted=Record Deleted successfully","_self")</script> ';
}

 ?>