<?php
	require_once('auth.php');
?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">  

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/craj.png" />
	<link rel="icon" href="css/glyphicons-halflings.png" rel="stylesheet" media="screen" />
	
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
	<li class="active"><a href="#">Home</a></li>
	<li><a href="forumform.php">Forum</a></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <b class="caret"></b></a>
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
          
          <button type="submit" class="btn btn-primary" name = "btnSaveUpdate">Save changes</button>
        </div>
      </div>
    </div>
  </div>
 </form>
 

<br>
<br>
<br>
<br>
<br>
<br>


	<div class=" shadow well" style="width:900px;height:170px;float:left;margin-left:40px;background:#0776A0;border:1px solid #0776A0;">
		
		<b><font face="Cambria" size = "3.5">Device:</font></b>&nbsp &nbsp &nbsp &nbsp &nbsp
		<?php
		echo '<select style = "height:25px;font-size:12px; ">';
		echo '<option>'; 
		echo $_SESSION['SEES_MEMBER_PHONE'];
		echo '</option>';
		echo '</select>';
		?>
		<table action="javascript:void(0)">
		<tr>
		<td><b><font face="Cambria" size = "3.5">Command: &nbsp </font></b></td>
		<td>
		<select id="cboCommand" style = "height:25px;font-size:12px;" >
		<option value="0" selected = "selected">Start Tracking</option>
		<option value="1">Stop Tracking</option>
		<option value="2">Get Device Information</option>
		<option value="3">Get Location History</option>
		<option value="4">Lock with Code</option>
		<option value="5">Unlock</option>
		<option value="6">Send SMS</option>
		</select>
		</tr>
		<br>
		<td><b><font id="txtLabel" style="visibility:hidden;" face="Cambria" size = "3.5">Send SMS:</font></b></td>
		<td><textarea rows="3" id="txtSend" style="visibility:hidden;width:220px;" ></textarea></td>
		</td>
		</table>
		<button type="button" class="btn btn-small btn-primary" id="btnExe" >Send Command</button>
	</div>

<?php
include('connection.php');
 $memid = $_SESSION['SESS_MEMBER_ID'];
	$result = mysql_query("SELECT * FROM tbllogin WHERE ID = '$memid'");
	while ($row1 = mysql_fetch_array($result))
	{
	echo '<input id="latitude" type="hidden" value="'.$row1['Latitude'].'">';
	echo '<input id="longitude" type="hidden" value="'.$row1['Longitude'].'">';
	}
?>
</head>

<div class="shadow well" id="googleMap" style="width:600px;height:550px;float:left;margin-left:40px;"></div>
<div class="shadow well" style="width:250px;height:550px;float:left;margin-left:10px;background:#0776A0;border:1px solid #0776A0;">
</div>
	
	<script src="http://code.jquery.com/jquery.js"></script>  
    <script src="js/bootstrap.min.js"></script>  



<script>

var cbo = document.getElementById('cboCommand');
var txt = document.getElementById('txtSend');
var lbl = document.getElementById('txtLabel');

cbo.onchange  = function(){
	if(this.value=="6"){
	txt.style.visibility = 'visible';
	lbl.style.visibility = 'visible';
	}else{
	txt.style.visibility = 'hidden';
	lbl.style.visibility = 'hidden';
	}
};
</script>	

<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
var $id = function (id) {
    return document.getElementById(id);
}

var mapContainer = $id('googleMap');
var mapProp = {
    'zoom': 5,
    'mapTypeId': google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(mapContainer, mapProp);
var marker = new google.maps.Marker({
    'map': map
});

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(9);
  map.setCenter(marker.getPosition());
  });

var cbo = $id('cboCommand');
var lati = $id('latitude');
var longi = $id('longitude');
var btnExe = $id('btnExe');

	var center = new google.maps.LatLng(lati.value,longi.value);
    map.setCenter(center);

btnExe.onclick = function () {
		if(cbo.value=="0"){
		marker.setPosition(center);
		map.panTo(marker.getPosition());
		}else if(cbo.value=="1"){
		marker.setPosition(null);
		}else if(cbo.value=="2"){
		$('#myModal2').modal('show');
		}
		}
     
</script>

</html>