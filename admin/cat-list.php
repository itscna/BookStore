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
      <h1>Category List</h1>
      <div class="nav">
        <ul>
          <li><a href="book-new.php">Home</a></li>
          <li><a href="cat-new.php">New Category</a></li>
          <li><a href="cat-list.php">Category List</a></li>
          <li><a href="book-list.php">Books List</a></li>
            <li><a href="logout.php" onclick="return confirm('Logout Now!')"> Logout </a> </li>
        </ul>
      </div>
      <?php include "conf/config.php";
            $result=mysqli_query($conn,"SELECT * FROM categories");
       ?>
       <ul>
         <?php while($row=mysqli_fetch_assoc($result)): ?>
         <li title="<?php echo $row['remark'] ?>">
           <?php echo $row['name'] ?>
           ( <a href="cat-edit.php?id=<?php echo $row['id'] ?>" class="text-info">Edit</a> )
           ( <a href="cat-del.php?id=<?php echo $row['id'] ?>" class="text-danger" onclick="return confirm('This item will be deleted!')">
             Delete </a> )
         </li>
       <?php endwhile; ?>
       </ul>
       <a href="cat-new.php" class="text-primary">Go Back</a>
    </div>
  </body>
</html>
