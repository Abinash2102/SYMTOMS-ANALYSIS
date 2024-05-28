<?php session_start();  ?>
<html>
<head>
	<link rel="stylesheet" href="patlog.css">
</head>
<body>





	<!-- this is for donor registraton -->
	<div class="container">
		<div class="form">
			<div class="head">
				<h1 class="head">Patient Login</h1>
			</div>
			<form action="" method="post" class="body">
				<label>
					<input style="width:100%; height:30px;" type="email" name="email"  placeholder="email" required>
				</label><br><br>
				<label>
					<input style="width:100%; height:30px;" type="password" name="password"  placeholder="password" required>
				</label><br><br>
				<button style="border:1px solid #337ab7; background-color: #337ab7; border-radius:8px; width:80px; height:30px;margin-left:500px;" name="submit" type="submit">Login</button> <br>
				<span style="margin-left:200px;">Not a member yet?</span> <a href="patreg.php" title="create a account" target="" >Sign Up</a> <br>
				<?php 
					$_SESSION['patient']="";
							
							include('config.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('home.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>
		</div>
	</div>	
</body>
</html>

