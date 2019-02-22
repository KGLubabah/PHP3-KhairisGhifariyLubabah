<?php
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	if($name == "lubabah" && $pass == "756") {
		echo "Successfull Login";
	} else {
		echo "Login Failed";
	}
?>