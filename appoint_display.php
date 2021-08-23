<html>
	<body>
	<head>
		<style type="text/css">
		table{
			border-collapse: collapse;
			width:100%;
			color:#fcac51;
			font-family:monospace;
			font-size:15px;
			text-align:left;
		}
		th{
			background-color:#8ef048;
			color:white;
		}
		tr:nth-child(even){background-color:#313330 }
		</style>
		<table>
		<tr>
		<th>S.NO</th>
		<th>Name </th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Date</th>
		<th>Area</th>
		<th>City</th>
		<th>State</th>
		<th>Postal Code</th>
		<th>Status</th>
		</tr>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$database_name="appointments";

			$conn=mysqli_connect($servername,$username,$password,$database_name);
			$sql="SELECT * from schedule";
			$result=mysqli_query($conn,$sql);
			if($result->num_rows >0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>" .$row["id"]."</td><td>" .$row["name"]."</td><td>" .$row["mobile"]."</td><td>" .$row["email"]."</td><td>" .$row["date"]."</td><td>" .$row["area"]."</td><td>" .$row["city"]."</td><td>" .$row["state"]."</td><td>" .$row["postal"]."</td><td>".$row["Status"]."</td></tr>";
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