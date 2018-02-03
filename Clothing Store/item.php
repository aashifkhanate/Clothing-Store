<?php
  if(!isset($_GET['stockID'])){
    header("Location: index.php");
  }
  $item_sql = "SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
  if($item_query=mysqli_query($dbconnect, $item_sql)){
    $item_rs=mysqli_fetch_assoc($item_query);?>
    <p><img src="images/<?php echo $item_rs['bigphoto'];?>"</p>
    <h1><?php echo $item_rs['name']; ?></h1>
    <h1><?php echo $item_rs['price']; ?></h1>
    <h1><?php echo $item_rs['description']; ?></h1>
    <?php
  }
 ?>
