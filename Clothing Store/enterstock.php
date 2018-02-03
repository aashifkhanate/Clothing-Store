<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }
  $enter_sql="INSERT INTO stock(name, categoryID, price, thumbnail, topline, description)
  VALUES('".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['name'])."',
  '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['categoryID'])."',
  '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['price'])."',
  '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['thumbnail'])."',
  '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['topline'])."',
  '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['description'])."')";
  $enter_query = mysqli_query($dbconnect, $enter_sql);

  unset($_SESSION['addstock']);
?>

<p>New stock item has been entered</p>
<p><a href="index.php?page=admin">Back to admin</a></p>
