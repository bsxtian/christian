<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_MEMBER_FULLNAME']);
	unset($_SESSION['SESS_MEMBER_USERNAME']);
	unset($_SESSION['SESS_MEMBER_PASSWORD']);
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/bootstrap.css" rel="stylesheet" >
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/layout.css" type="text/css" />
	<link rel="icon" type="image/png" href="images/craj.png" />
	<link href="signin.css" rel="stylesheet">
</head>
<body>
 <style>
body {
            background: #024C68;
			display:block;
			width:100%;
			height:100%;
        }
</style>
<div class="navbar shadow navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
  <img src = "images/craj.png" width ="200" style= "position:absolute;left:25px;"  />
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<img src = "images/logo1.png" width ="750" style = "position:absolute;left:0px;"  />
		<div class="span4 shadow well"  style = "background:#0776A0;border:1px solid #0776A0;float:right;margin:10px;">
					<form method = "POST" action = "login.php">
					<img src = "images/Lock.png" width = "60"/>
					<strong><font class="form-signin-heading" size="5" face="Lucida Calligraphy">Security Login</font></strong>
					<hr style="border:1px solid #024C68">
					<strong><font size = "3" face="cambria" >Username:</font></strong><br>		 
					<input class="input-xlarge" type="text" id="inputUsername" name ="inputUsername" placeholder = "Username"><br>
					<strong><font size = "3" face="cambria" >Password:</font></strong><br>
					<input class="input-xlarge" type="password" id="inputPassword" name ="inputPassword" placeholder = "Password">
						
					<div class="control-group">
					<div class="controls">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					<button type="submit" class=" btn btn-medium btn-inverse" style = "float:right;margin-right:30px;width:270px;">SIGN IN</button>
					</label>
		<?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
					</div>
					</div>
					</form>
		</div>
</body>


</html>