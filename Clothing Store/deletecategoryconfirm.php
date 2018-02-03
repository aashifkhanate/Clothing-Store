<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }
 ?>
 <h1>Confirm category to delete</h1>
  <?php
    $delcat_sql = "SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
    $delcat_query = mysqli_query($dbconnect, $delcat_sql);
    $delcat_rs = mysqli_fetch_assoc($delcat_query);

    $check_sql="SELECT * FROM stock where categoryID=".$_GET['categoryID'];
    $check_query=mysqli_query($dbconnect, $check_sql);
    $count=mysqli_num_rows($check_query);

  ?>

    <p><?php if ($count>0) {
      echo "Warning! There are: ".$count." stock items";
    } ?>

    <p> <?php echo "Do you really wish to delete ".$delcat_rs['name']."?"; ?></p>
    <p><a href="index.php?page=deletecategory&categoryID=<?php echo $_GET['categoryID']; ?>">Yes, delete it!</a> | <a href="index.php?page=deletecategoryselect">No, go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>
