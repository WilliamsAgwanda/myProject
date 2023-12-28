<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>


<div class="container">
  <h2>Login Form</h2>
  <form action="loginprocess.php" method="POST">
    <div class="row">
        <div class="col-25">
          <label for="admno">Admission Number</label>
        </div>
        <div class="col-75">
          <input type="text" id="admno" name="admno" placeholder="Admission Number..">
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
    <label for="linker" style="color:red">Don't Have an account?</label>
    <a href="Signup.php" class="linker">Sign up</a>
      <input type="submit" value="Login">
    </div>
  </form>
</div>

</body>
</html>
