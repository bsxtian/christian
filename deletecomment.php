<?php
include('connection.php');
$a=$_GET['id'];
mysql_query("DELETE  FROM tblforum WHERE ID='$a'");
header ("location: forumform.php");
mysql_close($con);
?>