<!DOCTYPE>

<html>
	<head>
		<title>PHP FILE</title>
	</head>
	<body>
<?php
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$Submit=$_POST["Submit"];

$Connection=mysqli_connect('localhost','root','','dbms');

$result = mysqli_query($Connection,"SELECT *
                       FROM student_user
                       WHERE username = '$Username' AND password = '$Password' ")
                  OR die("Failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username'] ==$Username && $row['password']==$Password) {
         session_start();
         $_SESSION["Name"] = $Username ;
   header("Location: student_login.php");
}
else
if ($Username == 'admin' && $Password == 'test123' ) {
             header("Location: admin_login.php");
              
          }

          if($Username == 'security' && $Password == 'test123' ) {
             header("Location: security.php");
              
          }
          if($Username == 'sports' && $Password == 'test123' ) {
             header("Location: sports.php");
              
          }
          if($Username == 'mess' && $Password == 'test123' ) {
             header("Location: mess.php");
              
          }
        else  
    { 
      echo "Unsucessfull Login <br> " ; 
    header( "refresh:2;url=Login.php" );}

?>
	    
	</body>
</html>
