<?php 
session_start(); 
include "../admin/database/admin-database.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

		$result = mysqli_query($db_admin, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['first_name'] = $row['first_name'];
            	$_SESSION['last_name'] = $row['last_name'];
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['gender'] = $row['gender'];
            	$_SESSION['phonenumber'] = $row['phonenumber'];
            	$_SESSION['birthday'] = $row['birthday'];
            	$_SESSION['profileImage'] = $row['profileImage'];
            	$_SESSION['user_id'] = $row['user_id'];
            	header("Location: ../index.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorrect Email or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorrect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}