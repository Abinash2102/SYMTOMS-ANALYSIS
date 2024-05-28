<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
<link rel="stylesheet" href="search_doctor1.css" />
</head>
<body>
<!-- <?php include('function.php'); ?> -->
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <nav>
                        <div id="logo">VIT Hospital</div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="contact.html">Contact</a></li>                                 
                            <li>
                                <label for="drop-2" class="toggle">Services +</label>
                                <a href="#">Services +</a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="search_doctor.php">Search For Doctors</a></li>
                                    <li><a href="book_doctor.php">Appoinment Booking</a></li>
                                    <li><a href="view_booking.php">Booking Details</a></li>
                                </ul>
                            </li>
                            <div class="log">
                                <li><a href="logout.php">Log Out</a></li>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><br>
	<div class="search" style="background-color:;">
		 <div class="formstyle" style="padding:40px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 40px;background-color:black;color:#white;width: 530px;margin-left: 300px;">
					<form action="search_result.php" method="post" class="form-group">

					<label>
						<select name="expertise" type="text" style="height:30px; width: 510px;margin-right: 175px;" />
												<option>Category</option>
												<option>Medicine</option>
												<option>Heart</option>
												<option>Bone</option>
												<option>Neurologist</option>
												<option>kidney</option>
												<option>Cardiologist</option>
												<option>Plastic Surgeon</option>
												<option>General Physician</option>
						</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 215px;margin-top: 35px;">Search</button>
					<br>
					</form>		
		 	</div>
	</div>
</body>
</html>