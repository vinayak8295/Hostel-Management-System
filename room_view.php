<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style >h2 {text-align: center;}</style>
	<title>Room Record</title>
		<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item"> </li>
        <li><button type="button" class="btn btn-primary" onclick="window.location.href='admin_login.php'" >Home</button></li>

        <li><div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Staff
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="staff_insert.php">Insert Staff Record</a>
    <a class="dropdown-item" href="staff_view.php">View Staff Record</a>
  </div>
</div>
</li>
        <li class="nav-item">&nbsp;</li>
      <li><div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Hostel
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="hostel_insert.php">Insert Hostel Record</a>
    <a class="dropdown-item" href="hostel_view.php">View Hostel Record</a>
  </div>
</div>
</li>
        
        <li class="nav-item">&nbsp;</li>
      <li><div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Room
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="room_insert.php">Insert Room Record</a>
    <a class="dropdown-item" href="room_view.php">View Room Record</a>
  </div>
</div>
</li>
        <li><button type="button" class="btn btn-primary" onclick="window.location.href='complaint_view.php'" >Complaint Box</button></li>
        
        <li><button type="button" class="btn btn-primary" onclick="window.location.href='leave_view.php'" > Leave </button></li>
        <li class="nav-item">&nbsp;</li>
      <li><div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Notice
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="message_insert.php">Write A Message</a>
    <a class="dropdown-item" href="message_view.php">View Message Record</a>
  </div>
</div>
</li>
<li><div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Student
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="student.php">Insert Student Data</a>
    <a class="dropdown-item" href="student_all_view.php">View Student Data</a>
  </div>
</div>
</li>
<li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><button type="button" class="btn btn-primary" onclick="window.location.href='logout.php'" >Logout</button></li>
     </ul>
      <form class="form-inline my-2 my-lg-0">
      </form>
    </div>
  </nav>





<form action="room_view.php" method="GET">
	</div>

</form>

<br><br>
<caption><h2>Room Record</h2></caption>
<table class="table table-hover">
	
	<tr>
		<th>Room_Id</th>
		<th>Capacity</th>
		<th>Name_Of_Student</th>
		<th>Roll_No</th>
		<th>Hostel_Id</th>
		

 
	</tr>
<?php 
$Connection=mysqli_connect('localhost','root','','dbms');
$ViewQuery="SELECT * 
            FROM room " ;
$Execute=mysqli_query($Connection,$ViewQuery);



while($DataRows=mysqli_fetch_array($Execute)){
	$Room_Id=$DataRows['room_id'];
	$Capacity=$DataRows['capacity'];
	$Name_Of_Student=$DataRows['name_of_student'];
	$Rollno=$DataRows['rollno'];
	$Hostel_Id=$DataRows['hostel_id'];
	
	


 ?>
 <tr>
<td><?php echo $Room_Id ;?></td>
<td><?php echo $Capacity; ?></td>
<td><?php echo $Name_Of_Student; ?></td>
<td><?php echo $Rollno; ?></td>
<td><?php echo $Hostel_Id; ?></td>


</tr>

<?php } ?>
</table>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>


</body>
</html>