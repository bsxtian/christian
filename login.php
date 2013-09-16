<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['inputUsername']);
	$password = clean($_POST['inputPassword']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
 
	$qry="SELECT * FROM tbllogin WHERE Username='$username' AND Password='$password'";
	$result=mysql_query($qry);
 
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['ID'];
			$_SESSION['SESS_MEMBER_FULLNAME'] = $member['Fullname'];
			$_SESSION['SESS_MEMBER_USERNAME'] = $member['Username'];
			$_SESSION['SESS_MEMBER_PASSWORD'] = $member['Password'];
			$_SESSION['SESS_MEMBER_IMAGE'] = $member['profilepic'];
			$_SESSION['SEES_MEMBER_PHONE'] = $member['phoneModel'];
			session_write_close();
			header("location:home.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'Invalid Username or Password.';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>