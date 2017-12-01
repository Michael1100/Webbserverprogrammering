<?php
	$dbc = mysqli_connect("localhost","root","","registrations");

	$Username = $_POST['Username'];
	
	$Password = $_POST['Password'];
	
	
	$query = "select * from registrations where username = '$Username' and password = '$Password';";
	
	mysqli_query($dbc, $query);
	
	$result=mysqli_query($dbc, $query);

    if($row = mysqli_fetch_array($result)){
        echo "U GOOD";
    }
	
	else{
        echo "Wrong";
    }
	
?>