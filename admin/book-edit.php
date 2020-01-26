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
        $sql="SELECT * FROM books WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
       ?>
        <form action="book-update.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

          <div class="form-group">
            <label for="title">Book Title</label>
            <input type="text" name="title" value="<?php echo $row['title'] ?>" id="title" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="author">Book Author</label>
            <input type="text" name="author" value="<?php echo $row['author'] ?>" id="author" class="form-control">
          </div>
          <div class="form-group">
            <label for="summary">Summary</label>
            <textarea name="summary" id="summary" class="form-control">
              <?php echo $row['summary'] ?>
            </textarea>
          </div>
          <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" value="<?php echo $row['price'] ?>" class="form-control" id="price" min="10">
        </div>
        <div class="form-group">
          <img src="covers/<?php echo $row['cover'] ?>" alt="Book Cover Photo" height="150px"><br><br>
            <div class="custom-file">
          <input type="file" name="cover" class="custom-file-label" id="cover">
          <label for="cover" class="custom-file-label">--Upload New Cover--</label>
        </div>
        </div>

        <select class="custom-select" name="category">
          <option value="0">--Choose Category--</option>
        <?php
          $category=mysqli_query($conn,"SELECT * FROM categories");
          while($cats=mysqli_fetch_assoc($category)):
         ?>
          <option value="<?php echo $cats['id'] ?>">
              <?php
                if($cats['id']===$row['category_id'])
                echo "Selected";
                echo $cats['name']
               ?>

          </option>
        <?php endwhile; ?>
       </select>
        <br><br>
       <input type="submit" value="Update Book" class="btn btn-primary">
        </form>
      <a href="book-list.php" class="text-primary">Go Back</a>
    </div>
  </body>
</html>
