<?php	
	session_start();
	//Include database connection details
	
	require_once('connection.php');
?>
<?php
$username = $_POST['txtusername1'];
$oldpassword = $_POST['txtCurrentpass'];
$newpassword = $_POST['txtNewpass'];
$repassword = $_POST['txtretypepass'];	

$q = mysql_query("SELECT * FROM tbllogin WHERE Username='$username'");
$n = mysql_num_rows($q);
	
if($username){
	
	if($n){
	$r = mysql_fetch_assoc($q);
	$pass = $r["Password"];
	
		if(($newpassword != $pass)||($repassword != $pass)){
	 
			if($repassword == $newpassword){
			
				if($oldpassword == $pass){
				
				mysql_query("UPDATE tbllogin SET Password='$newpassword' WHERE Username='$username'");
				  header("Location: home.php");
				
				}else{
					echo 'The submitted current password doesn\'t match your real current password';
				}
			} else {
                echo 'New password and the confirmation don\'t match';
            }
		} else {
            echo 'The new password matches the current password';
        }
	} else {
        echo 'Username doesn\'t exist';
    }
} 


?>

