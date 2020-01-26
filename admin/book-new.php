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
      <h1>Book Store</h1>
        <div class="nav">
          <ul>
            <li><a href="book-new.php">Home</a></li>
            <li><a href="cat-new.php">New Category</a></li>
            <li><a href="cat-list.php">Category List</a></li>
            <li><a href="book-list.php">Books List</a></li>
            <li><a href="logout.php" onclick="return confirm('Logout Now!')"> Logout </a> </li>
          </ul>
        </div>
      <form action="book-add.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Book Name</label>
          <input type="text" name="title" id="title" class="form-control" autofocus required>
        </div>
        <div class="form-group">
          <label for="author">Writer Name</label>
          <input type="text" name="author" id="author" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="summary">Summary</label>
          <textarea name="summary" id="summary" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="price">Book Price</label>
          <input type="number" name="price" id="price" class="form-control" min="10">
        </div>
        <div class="custom-file">
          <input type="file" name="cover" id="cover" class="custom-file-input">
          <label for="cover" class="custom-file-label">Upload Cover Photo</label>
        </div><br><br>

        <?php
          include "conf/config.php";
          $sql="SELECT * FROM categories";
          $result=mysqli_query($conn,$sql);
         ?>

              <select name="categories" class="custom-select">
                  <option value="0">--Choose Category--</option>
                  <?php while($cats=mysqli_fetch_assoc($result)): ?>
                  <option value="<?php echo $cats['id'] ?>">
                    <?php echo $cats['name'] ?>
                  </option>
                <?php endwhile ?>
              </select>
              <br><br>
        <input type="submit" value="Add Book" class="btn btn-primary">
      </form>
    </div>
  </body>
</html>
