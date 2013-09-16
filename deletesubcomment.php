<?php
include('connection.php');
$a=$_GET['id'];
mysql_query("DELETE  FROM tblsubcomment WHERE userid='$a'");
header ("location: forumform.php");
mysql_close($con);
?>