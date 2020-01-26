<?php
session_start();
$user_name=$_POST['user_name'];
$pwd=$_POST['pwd'];

if($user_name=="admin" && $pwd=="1234")
{
  $_SESSION['auth']=true;
  header("location:book-list.php");
}else{
  header("location:index.php");
}
