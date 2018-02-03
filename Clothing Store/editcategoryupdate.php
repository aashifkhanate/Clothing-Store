<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }
  $editcat_sql = "UPDATE category SET name='".$_SESSION['editcategory']['name']."' WHERE categoryID=".$_SESSION['editcategory']['categoryID'];
  $editcat_query = mysqli_query($dbconnect, $editcat_sql);
  unset($_SESSION['editcategory']);
 ?>
 <h1>Edit category</h1>
 <p>Category successfully updated</p>
 <p><a href="index.php?page=admin">Back to admin panel</a></p>
