<?php 
$Connection=mysqli_connect('localhost','root','','dbms');

$Delete_Staff_id=$_GET['Delete'];
$Delete_Query="UPDATE staff
                SET view = 0
				WHERE emp_id='$Delete_Staff_id' "
;

$Execute=mysqli_query($Connection,$Delete_Query);
if($Execute){
	echo '<script>window.open("staff_view.php?Deleted=Record Deleted successfully","_self")</script> ';
}

 ?>