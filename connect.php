<?php
$servername="localhost";
$username="root";
$password="";
$database_name="feedback_db";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
	$first_name= $_POST['first_name'];
	$last_name= $_POST['last_name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$address= $_POST['address'];
	$feedback= $_POST['feedback'];
	
	$sql_query="INSERT INTO feedback_table(first_name,last_name,email,mobile_number,address,feedback) VALUES ('$first_name','$last_name','$email','$mobile','$address','$feedback')";
	if(mysqli_query($conn,$sql_query))
	{
		echo "Your Feedback is recorded.";
		header('location:index.html');
	}
	else
	{
		echo "Error :" .$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>
