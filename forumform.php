<?php
	require_once('auth.php');
?>
<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }


}
 


} 



?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">  

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/craj.png" />
	<link href="css/style.css" rel="stylesheet" media="screen">
	
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap-modal.js" type="text/javascript"></script>
	
</head>
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
	<img src = "images/craj.png" width ="200"  style = "position:absolute;left:25px;" />
	<ul class="nav nav-pills" style= "float:right;">
	<li><a href="home.php">Home</a></li>
	<li class="active"><a href="#">Forum</a></li>
	<li class = "dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="#myModal1" data-toggle="modal">Change Username</a></li>
			<li><a href="#myModal2" data-toggle="modal">Change Password</a></li>
		</ul>
	</li>
	<li><a href="logout.php">Sign Out</a></li>
	</ul>
 </div>
</div>

<!-- Modal 1 -->
 <form method = "POST" action = "updateusername.php" id = "username">
  <div class="modal hide fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Change Username</h4>
        </div>
        <div class="modal-body">
		  <label>Current Username  </label>
		  <input name="idtxt" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
		  <input class="input-xlarge" type = "text" name = "txtCurrentuser" />
		  <label>New Username  </label>
		  <input class="input-xlarge" type = "text" name = "txtNewuser" />
		  <label>Re-type New Username  </label>
		  <input class="input-xlarge" type = "text" name = "txtretypeuser" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 </form>

 <!-- Modal 2 -->
 <form method = "POST" action = "updateaccount.php" id = "password">
  <div class="modal hide fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
		  <label>Current Password  </label>
		  <input name="idtxt" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
		  <input name="txtusername1" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_USERNAME']; ?>">
		  <input class="input-xlarge" type = "password" name = "txtCurrentpass" />
		  <label>New Password  </label>
		  <input class="input-xlarge" type = "password" name = "txtNewpass" />
		  <label>Re-type New Password  </label>
		  <input class="input-xlarge" type = "password" name = "txtretypepass" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name = "btnSaveUpdate">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 </form>
 
<br>
<br>
<br>
	<div>
	<?php	
	include('connection.php');	
		$picid = $_SESSION['SESS_MEMBER_ID'];
			$result = mysql_query("SELECT * FROM tbllogin where ID = '$picid'");
				while($row1 = mysql_fetch_array($result))
				{ 
		
				echo '<a href = "changepic.php" style = "margin-right:37px;float:right;" title="Click to Edit Profile Picture"><img src = "'.$row1['profilepic'].'" style="border:1px solid #0776A0;max-width:124px;max-height:124px" >'.'</a>';
	
				}
	
	?>
	</div>

<br>
<br>
	<div>
	<?php
	echo '<b><font face = "Cambria" size = "4" color = "white" style = "margin-right:10px;float:right;">' .$_SESSION['SESS_MEMBER_FULLNAME'].'</font></b>';
	?>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>

<body>
<div class="container-fluid">
	<form action="commentsave.php" method="POST">
	<div class="span7 shadow well" style = "background:#0776A0;border:1px solid #0776A0;">
	<input name="idtxt2" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
	<input name="txtusername2" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_USERNAME']; ?>">
	<input name="name" type="hidden" id="name" value="<?php echo $_SESSION['SESS_MEMBER_FULLNAME'];?>"/>
	<input name="name1" type="hidden" id="name" value="<?php echo $_SESSION['SESS_MEMBER_FULLNAME'];?>"/>
	<input name="image1" type="hidden" id="name" value="<?php echo $_SESSION['SESS_MEMBER_IMAGE'];?>"/>
	
	
	<textarea class="shadow" name = "comment" rows = "7" style = "width:500px;margin-left:20px;" placeholder = "Write your post.."></textarea></br>
	<button type="submit" class="btn btn-primary" name = "btnpost" style = "margin-left:20px;">POST</button>
	</form>
	

<br>
<br>
<br>
<?php

	include('connection.php');
	$commentid = $_SESSION['SESS_MEMBER_ID'];
	$fullname1 = $_SESSION['SESS_MEMBER_FULLNAME'];
	$result3 = mysql_query("SELECT * FROM tblforum ORDER BY ID DESC");
	
while($row3 = mysql_fetch_array($result3))
{
echo '<div class="span6 shadow well" style = "background:#0776A0;border:1px solid #024C68;">';
	echo '<a href=deletecomment.php?id='.$row3["ID"].' style = "float:right;color: #e6e6e6" >DELETE</a>';
  echo '<div>';
	$qwerty=$row3['userid'];	
	$time=$row3['time1'];	 
	$result4 = mysql_query("SELECT * FROM tbllogin where ID='$qwerty'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  { 
								  $fullname2=$row4['Fullname'];
								  echo '<img src="'.$row4['profilepic'].'" style="max-width: 50px;max-height: 50px;">';
								  echo '<b><font face = "Cambria" size = "4" style = "margin-left:10px;"><a style="text-decoration:none;color:#e6e6e6;" href=forumform.php?id='.$row3["ID"] .'>'.$fullname2.'</a></font></b>';

					
								  }	  			  
  echo '</div><br>';
	
					echo '<div style="float: left; margin-top: -4px; padding-bottom: 0px; padding-top: 0px; width: 310px;">';
					$time = time_stamp($time);
					echo '</div>';
					echo '<div style="width: 450px; margin-left: 0px; padding: 4px; margin-top: 20px; border-width: 1px 0px 0px 0px; border-style: solid; border-color: #024C68;">'.$row3['content'].'</div><br>';
					echo '<div style="width: 450px; margin-left: 0px; padding: 4px; margin-top: 0px; background-color: #0776A0; margin-bottom: 2px; font-family: '.'Lucida Grande'.', Tahoma, Verdana, Arial, sans-serif; font-size: 11px; color: #e6e6e6;">';
					$subid=$row3['ID'];
					$result = mysql_query("SELECT * FROM  tblsubcomment where userid='$subid'");
	
					$numberOfRows = MYSQL_NUMROWS($result);	
					
					echo $numberOfRows.'     '; 
					
					echo 'Comment'.'</div>';
						echo '<div class="well" style="border:1px solid #0776A0;width: 450px; margin-left: 0px; padding: 4px; margin-top: 0px; background-color: #024C68; margin-bottom: 2px;">';
						$result4 = mysql_query("SELECT * FROM  tblsubcomment where userid='$subid'");
						while($row4= mysql_fetch_array($result4))
						{ 					
						echo '<div style="width: 440px; margin-left: 0px; padding: 4px; margin-top: 0px; background-color: #024C68; margin-bottom: 2px;">';
						$userfull=$row4['usersfullname'];
						$result5 = mysql_query("SELECT * FROM tbllogin  where Fullname='$userfull'"); 
						while($row5 = mysql_fetch_array($result5))
						{
						echo '<img src="'.$row5['profilepic'].'" style="max-width: 30px; float:left;">';
						//echo '<div style="float: right; padding-top: 1px; padding-bottom: 1px; padding-right: 1px; width: 328px;">';
						echo '<label>';
						echo '<b><a style="text-decoration:none;margin-left:10px;" href=forumform.php?id='.$row3["userid"] .'>'.$row5['Fullname'].'</a></b>'.'   '.$row4['content'];
						echo '<a href=deletesubcomment.php?id='.$row4["userid"].' style = "float:right;color:gray;">x</a>';
						echo '</label>';
						//echo '</div>';
						}
						echo '</div><br>';					
						}					
						
		
						echo '<div style="width: 440px; margin-left: 0px; padding: 4px; margin-top: 0px; background-color: #024C68;">';
						echo '<form action="subcomment.php" method="post" style="margin-bottom: 2px;">';
						echo '<input name="commentid" type="hidden" value="'.$row3['ID'].'">';
						echo '<input name="subcommentname" type="hidden" value="'.$_SESSION['SESS_MEMBER_FULLNAME'].'">';
						echo '&nbsp;&nbsp;<input name="subcommentcontent" type="text" style="width: 440px; margin-left: 0px;" placeholder = "Write your comments..">';
						echo '</form>';	
						echo '</div>';
						echo '<div style="padding-top: 0px;"></div>';
						echo '</div>';
	
echo '</div>';

}

	?>
	</div>
</div>	

	<script src="http://code.jquery.com/jquery.js"></script>  
    <script src="js/bootstrap.min.js"></script>  
</body>
</html>