<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container">
			<div class="form">
				<div class="head">
					<h1>Doctor Login</h1>
				</div>
				<form action="" method="post" class="body">
					<label>
						<input style="width:100%; height:30px;" type="text" name="userid"  placeholder="userid" required>
					</label><br><br>
					<label>
						<input style="width:100%; height:30px;" type="password" name="password"  placeholder="password">
					</label><br><br>
					<button style="border:1px solid #337ab7; background-color: #337ab7; border-radius:8px; width:80px; height:30px;margin-left:500px;" name="submit" type="submit" style="margin-left:127px;padding: 5px 25px; border-radius: 4px;">Login</button> <br>

					


					<!-- login validation -->
			<?php 
							$_SESSION['adminstatus']="";
							
							include('config1.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["userid"]= $_POST["userid"];
											// $_SESSION["type"]=$result[2];
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('home.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
				</form> <br>&nbsp;&nbsp;&nbsp;
				<br>
			</div>
	</div>	
</body>
</html>

