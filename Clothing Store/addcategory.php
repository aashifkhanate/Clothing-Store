<?php
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location:index.php?page=admin");
  }
  if(!isset($_SESSION['addcategory']['name'])){
    $_SESSION['addcategory']['name']="";
  }
 ?>
 <h1>Add new category</h1>
 <form method="post" action="index.php?page=confirmcategory"/>
  <p><input type="text" name="name" value="<?php echo $_SESSION['addcategory']['name']; ?>" size="40" maxlength="50"/><p>
  <p><input type="submit" name="submit" value="Add category"/><p>
 </form>
