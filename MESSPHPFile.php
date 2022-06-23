<!DOCTYPE>

<html>
	<head>
    <style >h2 {text-align: center;}</style>
		<title>PHP FILE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
<?php
$Roll_Number=$_POST["rollno"];
$Hostel_Id=$_POST["hostel_id"];
$Submit=$_POST["Submit"];

if(isset($Roll_Number)&&!empty($Roll_Number))
 {

?>


   <caption><h2>Mess Fee Record</h2></caption>
   <table class="table table-hover">
    
    <tr>
      <th>Roll Number</th>      
      <th>Fees</th>     
      <th>Hostel ID</th>     
      <th>DATE</th>
      <th>Fees</th>         

    </tr>

<?php 

$Connection=mysqli_connect('localhost','root','','dbms');
$ViewQuery="SELECT * 
            FROM mess
            Where rollno = '$Roll_Number'" ;
$Execute=mysqli_query($Connection,$ViewQuery);



while($DataRows=mysqli_fetch_array($Execute)){
  $Roll_Number=$DataRows['rollno'];
  $Fees=$DataRows['fees'];
  $Hostel_id=$DataRows['hostel_id'];
  $Date=$DataRows['date'];

 ?>
 <tr>
<td><?php echo $Roll_Number ;?></td>
<td><?php echo $Fees; ?></td>
<td><?php echo $Hostel_id; ?></td>
<td><?php echo $Date; ?></td>
<td><a href="Mess_Delete.php?Delete=<?php echo $Roll_Number; ?>">PAID</a></td>

</tr>

<?php } ?>


  </table>


  
<?php
 }
 ?>

<?php
if(isset($Roll_Number)&&!empty($Roll_Number))

{
 
}
else
if(isset($Hostel_Id)&&!empty($Hostel_Id))
 {

 ?>


<caption><h2>Mess Fee Record</h2></caption>
   <table class="table table-hover">
    
    <tr>
      <th>Roll Number</th>      
      <th>Fees</th>     
      <th>Hostel ID</th>     
      <th>DATE</th>   
      <th>Fees</th>      

    </tr>

    <?php 

$Connection=mysqli_connect('localhost','root','','dbms');
$ViewQuery="SELECT * 
            FROM mess
            Where hostel_id = '$Hostel_Id'
            ORDER BY fees DESC" ;
$Execute=mysqli_query($Connection,$ViewQuery);



while($DataRows=mysqli_fetch_array($Execute)){
  $Roll_Number=$DataRows['rollno'];
  $Fees=$DataRows['fees'];
  $Hostel_id=$DataRows['hostel_id'];
  $Date=$DataRows['date'];

 ?>
 <tr>
<td><?php echo $Roll_Number ;?></td>
<td><?php echo $Fees; ?></td>
<td><?php echo $Hostel_id; ?></td>
<td><?php echo $Date; ?></td>
<td><a href="Mess_Delete.php?Delete=<?php echo $Roll_Number; ?>">PAID</a></td>

</tr>

<?php } ?>


  </table>


  
<?php


 }

?>
	    
</body>
</html>
