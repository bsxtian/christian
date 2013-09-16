<?php	
	session_start();
	//Include database connection details
	
	require_once('connection.php');
?>
<?php
$id = $_POST['idtxt'];
$oldusername = $_POST['txtCurrentuser'];
$newusername = $_POST['txtNewuser'];
$reusername = $_POST['txtretypeuser'];	

$q = mysql_query("SELECT * FROM tbllogin WHERE ID='$id'");
$n = mysql_num_rows($q);
	
if($id){
	
	if($n){
	$r = mysql_fetch_assoc($q);
	$user = $r["Username"];
	
		if(($newusername != $user)||($reusername != $user)){
	 
			if($reusername == $newusername){
			
				if($oldusername == $user){
				
				mysql_query("UPDATE tbllogin SET Username='$newusername' WHERE ID='$id'");
				  header("Location: home.php");
				
				}else{
					echo 'The submitted current username doesn\'t match your real current username';
				}
			} else {
                echo 'New Username and the Confirmation don\'t match';
            }
		} else {
            echo 'The New Username matches the Current Username';
        }
	} else {
        echo 'ID doesn\'t exist';
    }
} 


?>

