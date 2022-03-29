<?php 
session_start(); //session kickstart
include 'connection.php'; 

//login page verification 
if (isset($_POST['username']) && isset($_POST['password'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username)) {
		header("Location: login.php?error=Username is required");
	}else if (empty($password)){
		header("Location: login.php?error=Password is required&username=$username");
	}else {
		$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
		$stmt->execute([$email]);


	//registeration page verification
		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();

			$user_id = $user['id'];
			$user_email = $user['email'];
			$user_password = $user['password'];
			$user_full_name = $user['full_name'];

			if ($email === $user_email) {
				if (password_verify($password, $user_password)) {
					$_SESSION['user_id'] = $user_id;
					$_SESSION['user_email'] = $user_email;
					$_SESSION['user_full_name'] = $user_full_name;
					header("Location: index.php");

				}else {
					header("Location: login.php?error=Incorect User name or password&email=$email");
				}
			}else {
				header("Location: login.php?error=Incorect User name or password&email=$email");
			}
		}else {
			header("Location: login.php?error=Incorect User name or password&email=$email");
		}
	}
}

/* AWA MELVINE., 2017. Complete user registration system using PHP and MySQL database .[online]. Codewithawa.com. Available from: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database [Accessed 24 March 2022]*/