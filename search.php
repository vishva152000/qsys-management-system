<html>
<head>
<title >Appointment Approval  </title>
<style>
	body{
		background-color:whitesmoke;
		}
		input{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px grey;
		}
</style>
</head>
<body>
	<center>
		<h1>Select an ID to Approve</h1>
		<form action="" method="POST">
			<input type="text" name="id" placeholder="Enter ID to search"/><br/>
			<input type ="submit" name="search" values="search-data"><br/>
			
			
		</form>
		
		
		<?php
			$conn=mysqli_connect("localhost","root","");
			$db=mysqli_select_db($conn,'appointments');
			
			if(isset($_POST['search']))
			{
				$id=$_POST['id'];
				$query="SELECT * FROM schedule where id='$id' ";
				$query_run=mysqli_query($conn,$query);
				
				
				while($row=mysqli_fetch_array($query_run))
				{
					?>
					<form action="" method="POST">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>"/><br>
						<input type="text" name="name" value="<?php echo $row['name'] ?>"/><br>
						<input type="text" name="mobile" value="<?php echo $row['mobile'] ?>"/><br>
						<input type="text" name="email" value="<?php echo $row['email'] ?>"/><br>
						<input type="text" name="date" value="<?php echo $row['date'] ?>"/><br>
						<input type="text" name="area" value="<?php echo $row['area'] ?>"/><br>
						<input type="text" name="city" value="<?php echo $row['city'] ?>"/><br>
						<input type="text" name="state" value="<?php echo $row['state'] ?>"/><br>
						<input type="text" name="postal" value="<?php echo $row['postal'] ?>"/><br>
						<input type="text" name="status" value="<?php echo $row['Status'] ?>"/><br>
						
						
						<input type="text" name="approval" placeholder="Approved/DisApproved"/><br/>
						<input type ="submit" name="status" values="approval-st">
					</form>
					<?php
				}
			}
			if(isset($_POST['status']))
				
			{
	
				$sql_query=" UPDATE schedule SET Status ='$_POST[approval]' WHERE id='$_POST[id]'";
				$query_run=mysqli_query($conn,$sql_query);
				if($query_run)
				{
					echo "Appointment Status has been Changed";
				}
				
				mysqli_close($conn);
			}
				

		
		?>
		
		

			
</body>
</html>