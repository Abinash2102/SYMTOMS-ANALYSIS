<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="appoinment.css" />
</head>
<body>
	<div class="search" style="background-color:;">
	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:350px; margin-right:350px;">
		<h1>Customer Details</h1>
	</div>
			<div class="formstyle" class="formstyle" style="padding: 10px 10px;border: 1px solid lightgrey;margin-top:50px;padding-top:40px;padding-left:160px; margin-right: 376px;margin-left: 406px; margin-bottom: 25px;background-color:black;color:white;">

					<form action="" method="post" class="form-group">

					<!-- testing -->
					<label>
						<input type="text" name="search"  placeholder="Booking ID/phone/email" required style="margin-right: 140px;">
					</label><br><br><br><br><br>

					<button name="submit" type="submit" style="float: right;margin-right:196px;margin-top: -38px;border-radius: 3px;padding: 4px">Search</button> <br>
					
					</form>

		 	</div>
	</div>
			<?php 
					include('config1.php');
					if(isset($_POST["submit"])){

					$sql = " SELECT * FROM patient WHERE contact = '" . $_POST["search"]."' OR email = '" . $_POST["search"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<thead>
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Contact</th>
								<th>Address</th>
								<th>Blood Group</th>
								<th>Email</th>
							</tr>
							</thead>";
						while($row=mysqli_fetch_array($result)){
								echo "<tbody>";
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['age']."</td>";
								
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['address']."</td>";
								
								echo "<td>".$row['bgroup']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "</tr>";
						}
								echo "</tbody>";
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}
				}	

			?>
</body>
</html>