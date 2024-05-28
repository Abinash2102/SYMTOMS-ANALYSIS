<?php
include_once 'config2.php';
if(isset($_POST['save']))
{	 
	 $sql = "INSERT INTO doctor (name,address,contact,email,expertise,userid,fee,password)
	 VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["expertise"] . "','" . $_POST["userid"] . "','" . $_POST["fee"] . "','" . $_POST["password"] . "' )";
	 if (mysql_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysql_error($conn);
	 }
	 mysql_close($conn);
}
?>