<?php

include "conf/config.php";

$title=$_POST['title'];
$author=$_POST['author'];
$summary=$_POST['summary'];
$cat_id=$_POST['categories'];
$price=$_POST['price'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

if($cover){
  move_uploaded_file($tmp,"covers/$cover");
}
$sql="INSERT INTO books(title,author,summary,price,cover,category_id,created_date,modified_date)
      VALUES('$title','$author','$summary','$price','$cover','$cat_id',now(),now())";

mysqli_query($conn,$sql);

header("location:book-list.php");
