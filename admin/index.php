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
        <h2>Admin login</h2>
          <form action="login.php" method="post">
            <div class="form-group">
              <label for="user_name">User Name</label>
              <input type="text" name="user_name" id="user_name" class="form-control" autofocus required>
            </div>
            <div class="form-group">
              <label for="pwd">Password</label>
              <input type="password" name="pwd" id="pwd" class="form-control" required>
            </div>
            <input type="submit" value="Login" class="btn btn-block btn-primary">
          </form>
      </div>
  </body>
</html>
