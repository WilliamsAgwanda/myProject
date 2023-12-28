<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>


<div class="container">
  <h2>Admin Portal</h2>
  <form action="adminaction.php" method="POST">
    <div class="row">
        <div class="col-25">
          <label for="admno">Username</label>
        </div>
        <div class="col-75">
          <input type="text" id="admin" name="admin" placeholder="Admin Username..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="text" id="password" name="password" placeholder="Password">
        </div>
      </div>
   
    <div class="row">
      <input type="submit" value="Login">
    </div>
  </form>
</div>

</body>
</html>
