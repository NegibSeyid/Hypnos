<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role = $_POST['role'];

		$conn->mysql_query("UPDATE `utilisateur` SET `name` = '$name', `username` = '$username', `password` = '$password', `Role` = '$role' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
		header("location:account.php");
	}	