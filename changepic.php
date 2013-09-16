<?php	
	session_start();
	//Include database connection details
	
	require_once('connection.php');
?>
<?php
				  if (isset($_SESSION['SESS_MEMBER_ID']))
	{
		
		$id=$_SESSION['SESS_MEMBER_ID'];
		$result = mysql_query("SELECT * FROM tbllogin WHERE ID = $id");
		
while($row = mysql_fetch_array($result))
  {
  echo '<img width=200 height=180 alt="Unable to View" src="'. $row["profilepic"] .'">';
  }

	echo '<form action="updatepic.php" method="post" enctype="multipart/form-data">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	echo '<br>';
			echo '<input type="hidden" name="txtid" value="'. $_SESSION['SESS_MEMBER_ID'] .'">';
			echo 'Select Image';
			echo '<br>';
			echo '<input type="file" name="image">'.'<br>';
			echo '<input type="submit" value="Upload">';
	echo '</form>';
			}
			?>
			
