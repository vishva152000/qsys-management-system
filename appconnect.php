<?php
$servername="localhost";
$username="root";
$password="";
$database_name="appointments";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
	$name= $_POST['name'];
	$mobile= $_POST['mobile'];
	$email= $_POST['email'];
	$date= $_POST['date'];
	$area= $_POST['area'];
	$city= $_POST['city'];
	$state= $_POST['state'];
	$postal= $_POST['postal'];
	
	$sql_query="INSERT INTO schedule(name,mobile,email,date,area,city,state,postal) VALUES ('$name','$mobile','$email','$date','$area','$city','$state','$postal')";
	if(mysqli_query($conn,$sql_query))
	{
		echo "Your Appointment is booked.";
		header('location:index.html');
	}
	else
	{
		echo "Error :" .$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>
