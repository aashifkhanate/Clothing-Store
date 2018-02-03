<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }

  if(!isset($_SESSION['addcategory']['name'])){
    header("Location:index.php?page=admin");
  }

  $newcategory_sql = "INSERT INTO category(name) VALUES ('".mysqli_real_escape_string($dbconnect,$_SESSION['addcategory']['name'])."')";
  $newcategory_qry = mysqli_query($dbconnect, $newcategory_sql);
  unset($_SESSION['addcategory']['name']);
 ?>

 <p>New category has been entered</p>
 <p><a href="index.php?page=admin">Return to admin panel</a></p>
