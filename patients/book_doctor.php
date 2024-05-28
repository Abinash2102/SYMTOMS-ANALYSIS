<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="book_doctor.css" />
</head>
<body>
	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:350px; margin-right:350px;">
		<h1>Appoinment Booking</h1>
	</div>
					<?php 
					include('config.php');
					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);
					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Mobile</th>
									<th>Email</th>
									<th>Expertise in</th>
									<th>Book</th>
								</tr>
							</thead>";
						while($row=mysqli_fetch_array($result)){
								echo "<tbody>";
								echo "<tr>";
								echo "<td>".$row['doc_id']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['expertise']."</td>";
						?>
							<td><a href="booking.php?doc_id=<?php echo $row['doc_id'] ?>">Book</a></td>
						<?php 		
								echo "</tr>";
						}
								echo "</tbody>";
						echo "</table>";
					}
					?>
</body>
</html>
