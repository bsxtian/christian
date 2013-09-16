<?php
session_start();
include('connection.php');
$commentid=$_POST['commentid'];
$subcommentcontent=$_POST['subcommentcontent'];
$subcommentname=$_POST['subcommentname'];

mysql_query("INSERT INTO tblsubcomment(userid, usersfullname, content)VALUES('$commentid', '$subcommentname', '$subcommentcontent')");
header("location: forumform.php");
mysql_close($con);
?>