<?php 
$Connection=mysqli_connect('localhost','root','','dbms');

$Delete_message=$_GET['Delete'];
$Delete_Query="UPDATE message
				 SET admin_view = 0 
				WHERE rollno ='$Delete_message' " ;

$Execute=mysqli_query($Connection,$Delete_Query);
if($Execute){
	echo '<script>window.open("message_view.php?Deleted=Record Deleted successfully","_self")</script> ';
}

 ?>