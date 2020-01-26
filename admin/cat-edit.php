<?php
      include "auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Store/Admin</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="container-fluid">
      <h1>Book Edit</h1>
      <div class="nav">
        <ul>
          <li><a href="book-new.php">Home</a></li>
          <li><a href="cat-new.php">New Category</a></li>
          <li><a href="cat-list.php">Category List</a></li>
          <li><a href="book-list.php">Books List</a></li>
            <li><a href="logout.php" onclick="return confirm('Logout Now!')"> Logout </a> </li>
        </ul>
      </div>
      <?php
            include "conf/config.php";
            $id=$_GET['id'];
            $result=mysqli_query($conn,"SELECT * FROM categories WHERE id=$id");
            $row=mysqli_fetch_assoc($result);
       ?>
       <form action="cat-update.php" method="post">
         <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
         <div class="form-group">
           <label for="name">Name</label>
           <input type="text" name="name" value="<?php echo $row['name'] ?>" id="name" autofocus class="form-control" required>
         </div>
         <div class="form-group">
           <label for="remark">Remark</label>
           <textarea name="remark" id="remark" class="form-control">
             <?php echo $row['remark'] ?>
           </textarea>
         </div>
         <input type="submit"  value="Edit" class="btn btn-block btn-primary">
       </form>
       <a href="cat-list.php">Go Back</a>
    </div>
  </body>
</html>
