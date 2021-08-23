<html>
	<body>
	<head>
		<style type="text/css">
		table{
			border-collapse: collapse;
			width:100%;
			color:#ebc334;
			font-family:monospace;
			font-size:15px;
			text-align:left;
		}
		th{
			background-color:#ebc334;
			color:#e4f7f3;
		}
		tr:nth-child(even){background-color:#7d7c77 }
		</style>
		<table>
		<tr>
		<th>S.NO</th>
		<th>Date&Time </th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Feedback</th>
		</tr>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$database_name="feedback_db";

			$conn=mysqli_connect($servername,$username,$password,$database_name);
			$sql="SELECT * from feedback_table";
			$result=mysqli_query($conn,$sql);
			if($result->num_rows >0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>" .$row["S.NO"]."</td><td>" .$row["Date&Time"]."</td><td>" .$row["first_name"]."</td><td>" .$row["last_name"]."</td><td>" .$row["email"]."</td><td>" .$row["mobile_number"]."</td><td>" .$row["address"]."</td><td>" .$row["feedback"]."</td></tr>";
				}
			}
			else{
				echo "No Results";
				
			}
			$conn->close();
			?>
		</table>
	</body>
</html>