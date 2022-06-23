<?php 
$Connection=mysqli_connect('localhost','root','','dbms');

$Update_Status=$_GET['update'];
$Query="UPDATE leaveform
               SET status = 'approved'
                WHERE rollno ='$Update_Status' "
;

$Execute=mysqli_query($Connection,$Query);
if($Execute){
	echo '<script>window.open("leave_view.php?updated=Record updated successfully","_self")</script> ';
}

 ?>