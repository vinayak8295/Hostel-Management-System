<?php 
$Connection=mysqli_connect('localhost','root','','dbms');

$Update_Status=$_GET['update'];
$Query="UPDATE complaint
               SET status = 'action taken'
                WHERE rollno ='$Update_Status' "
;

$Execute=mysqli_query($Connection,$Query);
if($Execute){
	echo '<script>window.open("complaint_view.php?updated=Record updated successfully","_self")</script> ';
}

 ?>