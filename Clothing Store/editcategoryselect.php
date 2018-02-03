<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }
  unset($_SESSION['editcategory']);
 ?>
 <h1>Edit category</h1>

 <?php
 $editcat_sql = "SELECT * FROM category";
 $editcat_query = mysqli_query($dbconnect, $editcat_sql);
 $editcat_rs = mysqli_fetch_assoc($editcat_query);
  do {
    ?>
    <p><a href="index.php?page=editcategory&categoryID=<?php echo  $editcat_rs['categoryID'] ?>"><?php echo $editcat_rs['name'] ?></a></p>
    <?php
  } while ($editcat_rs = mysqli_fetch_assoc($editcat_query));
  ?>
