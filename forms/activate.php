<?php
	include('../includes/dbh.inc.php');
	session_start();
	if(isset($_GET['code'])){
	$user=$_GET['uid'];
	$code=$_GET['code'];

	$query=mysqli_query($conn,"SELECT * FROM users WHERE usersId='$user'");
	$row=mysqli_fetch_array($query);

	if($row['usersCode']==$code){
		//activate account
		mysqli_query($conn,"update users set usersVerify='1' where usersId='$user'");
		header("Location: signup.php?error=verifysuccessful");
	}
	else{
        header("Location: signup.php?error=erroroccured");
	}
	}
	else{
		header("Location: ../index.php");
	}
?>