<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="search_result.css" />
</head>
<body>

	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:350px; margin-right:350px;">
		<h1>Doctor List</h1>
	</div>
<!-- result -->

					<?php 
					include('config.php');
					

					$sql = " SELECT * FROM doctor WHERE expertise = '" . $_POST["expertise"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<thead>
								<tr>
									<th>SL.</th>
									<th>Name</th>
									<th>Address</th>
									<th>Mobile</th>
									<th>Email</th>
									<th>Expertise in</th>								
								</tr>
							</thead>";
						while($row=mysqli_fetch_array($result)){
							echo "<tbody>";
								echo "<tr>";
								echo "<td>".$row['doc_id']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['address']."</td>";
								
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";

								echo "<td>".$row['expertise']."</td>";
						?>
						<?php 		
								
								echo "</tr>";
						}
							echo "</tbody>";
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
	<button style="border:1px solid #337ab7; background-color: #337ab7; border-radius:8px; width:120px; height:30px;margin-left:570px;"><a href="search_doctor.php">Search Again</a></button>	
</body>
</html>
