<?php
	$dbc = mysqli_connect("localhost","root","","registrations");

	$Username = $_POST['Username'];
	
	$Password = $_POST['Password'];
	
	$Date = $_POST['Year'] . "-". $_POST['Month'] . "-" . $_POST['Date'];
	
	$Firstname = $_POST['Firstname'];
	
	$Lastname = $_POST['Lastname'];
	
	$query = "INSERT INTO registrations(Username, Password, Date, Firstname, Lastname) VALUES('$Username','$Password','$Date','$Firstname','$Lastname');";
	
	mysqli_query($dbc, $query);
	
	
	
	
	
?>