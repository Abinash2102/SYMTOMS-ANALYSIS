<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home.css" />
</head>
<body>
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
    <div class="FooterContainer">
        <div class="FooterContent">
            <div class="FooterWrap">
                <img src="images/c1.jpg"></img>
            </div>
            <div class="FooterWrap">
                <img src="images/c2.jpg"></img>
            </div>
            <div class="FooterWrap">
                <img src="images/c3.jpg"></img>
            </div>
            <div class="FooterWrap">
                <img src="images/c4.jpg"></img>
            </div>
        </div>
    </div><br> 
    <div class="DownContainer">
        <div class="DownWrap">
            <img src="images/f1.jpg"></img>
        </div>
        <div class="DownWrap">
            <img src="images/f2.jpg"></img>
        </div>
        <div class="DownWrap">
            <img src="images/f3.jpg"></img>
        </div>
        <div class="DownWrap">
            <img src="images/f4.jpg"></img>
        </div>
        <div class="DownWrap">
            <img src="images/f9.jpg"></img>
        </div>
    </div>
    <div class="FooterContainer">
        <h4>Recommended for You</h4>
        <div class="FooterContent">
            <div class="FooterWrap">
                <img src="images/f5.jpg"></img>
            </div>
            <div class="FooterWrap">
                <img src="images/f6.jpg"></img>
            </div>
            <div class="FooterWrap">
                <img src="images/f7.jpg"></img>
            </div>
            <div class="FooterWrap">
                <img src="images/f8.jpg"></img>
            </div>
        </div>
    </div>

</body>
</html>
