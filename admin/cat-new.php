<?php
      include "auth.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Store/admin </title>
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
		<form action="cat-add.php" method="post">
			<div class="form-group">
				<label for="name">Category Name</label>
				<input type="text" name="name" id="name" class="form-control" autofocus required>
			</div>
			<div class="form-group">
				<label for="remark">Detail</label>
				<textarea name="remark" id="remark" name="remark" class="form-control" required></textarea>
			</div>
			<input type="submit" value="Add" class="btn btn-primary">
		</form>
	</div>
</body>
</html>
