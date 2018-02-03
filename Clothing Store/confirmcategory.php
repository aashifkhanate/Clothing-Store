<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }
  if(!isset($_POST['submit'])){
    header("Location:index.php?page=admin");
  }

  $_SESSION['addcategory']['name'] = $_POST['name'];
?>

<h1>Confirm category name</h1>
<p>You entered: <?php echo $_POST['name']; ?></p>
<p><a href="index.php?page=entercategory">Correct, continue</a> | <a href="index.php?page=addcategory">Oops, go back</a></p>
