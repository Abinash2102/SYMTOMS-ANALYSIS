<html>
<head>
	<link rel="stylesheet" href="patreg.css">
</head>
<body>




	<!-- this is for donor registraton -->
	<div class="container">
		<div class="form">
			<div class="head">
				<h1 class="">Patient Registration</h1>
			</div>
			<form enctype="multipart/form-data" method="post" class="body">
			 		<label>
						<input style="width:100%; height:30px;" type="text" name="name" value="" placeholder="Full Name" required>
					</label><br><br>
					<label>
						<input style="width:100%; height:30px;" type="number" name="age"  placeholder="Age" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						<input style="width:100%; height:30px;" type="number" name="contact"  placeholder="Contact No" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					<label>
						<input style="width:100%; height:30px;" type="text" name="address" value="" placeholder="Address">
					</label><br><br>
					<label>
						<select style="width:100%; height:30px;" name="bgroup" required>
										<option value="">Blood Group</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select>
					</label><br><br>
					<label>
						<input style="width:100%; height:30px;" type="email" name="email"  value="" placeholder="Email" required>
					</label><br><br>
					<label>
						<input style="width:100%; height:30px;" type="password" name="password"  value="" placeholder="Password" required>
					</label><br><br>
					<button style="border:1px solid #337ab7; background-color: #337ab7; border-radius:8px; width:80px; height:30px;margin-left:500px;" name="submit" type="submit" >Register</button> <br>
			</form>
		</div>
	</div>

	 <!-- validation and insertion -->


				<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM patient WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO patient (name,age,contact,address,bgroup,email, password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('secure.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 
</body>
</html>