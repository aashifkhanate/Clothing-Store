<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }
  $delcat_sql = "DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
  $delcat_query = mysqli_query($dbconnect, $delcat_sql);
  $delstock_sql = "DELETE FROM stock WHERE categoryID=".$_GET['categoryID'];
  $delcat_query = mysqli_query($dbconnect, $delstock_sql);
 ?>
 <h1>category deleted</h1>
    <p>Category has been successfully deleted.</p>
    <p><a href="index.php?page=admin">Return to admin panel</a></p>
