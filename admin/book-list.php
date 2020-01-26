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
      <h1>Book List</h1>
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
            $result=mysqli_query($conn,"SELECT books.*,categories.name FROM books LEFT JOIN categories
                    ON books.category_id=categories.id ORDER BY books.created_date DESC");
      ?>
      <ul class="books">
        <li>
        <?php while($row=mysqli_fetch_assoc($result)): ?>
          <img src="covers/<?php echo $row['cover'] ?>" alt="book Cover Photo" align="right" height="150px">
      <h3 style="display:inline;"> <?php echo $row['title'] ?></h3> by
      <h5 style="display:inline;"><?php echo $row['author'] ?> </h5> <br>
      <p> <?php echo $row['summary'] ?> </p>
      <p> Price : ($<?php echo $row['price'] ?>) </p>
      <b>Category: <?php echo $row['name'] ?></b>
      ( <a href="book-edit.php?id=<?php echo $row['id']; ?>" class="text-primary"> Edit </a>)
      ( <a href="book-del.php?id=<?php echo $row['id']; ?>" class="text-danger"
        onclick="return confirm('This item will be deleted!')"> Delete </a> )  <hr>
      <?php endwhile; ?>
        </li>
      </ul>
      <a href="book-new.php" class="text-primary">Go Back</a>
    </div>
  </body>
</html>
