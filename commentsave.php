<?php
session_start();
include('connection.php');
$id=$_POST['idtxt2'];
$username=$_POST['txtusername2'];
$fullname=$_POST['name'];
$image=$_POST['image1'];
$content=$_POST['comment'];
$date1=date();
$time=time();

mysql_query("INSERT INTO tblforum(userid, users, userfullname, userspic, content, date1, time1)VALUES('$id', '$username', '$fullname', '$image', '$content', '$date1', '$time')");
header("location: forumform.php");
mysql_close($con);
?>