<?php
	if ( isset($POST['login']) ) {
		
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	mysqli_connect("localhost","root","");
	mysqli_select_db("wisma");
	
	$conn = mysqli_connect("localhost","root","","wisma");
}
?>
