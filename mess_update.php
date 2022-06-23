<?php
$Connection=mysqli_connect('localhost','root','','dbms');

$Variable = date("Y-m-d") ;


$ViewQuery= "
           UPDATE  mess
           SET fees = fees + 3000 , date = '$Variable'
            ";

$Execute=mysqli_query($Connection,$ViewQuery);


$ViewQuery1="SELECT rollno 
            FROM mess
            WHERE fees >= '9000'
            ";
$Execute1=mysqli_query($Connection,$ViewQuery1);


while($DataRows=mysqli_fetch_array($Execute1)){
	$Roll_No=$DataRows['rollno'];

$Query2="INSERT INTO message(rollno,date1,message,from1) 
VALUES('$Roll_No','$Variable','Your fees is long due','Mess')" ;
$Execute2=mysqli_query($Connection,$Query2);

}
if($Execute){
	echo "<h2>Successfully Updated</h2>";
}

?>