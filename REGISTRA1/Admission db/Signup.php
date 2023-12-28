
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Admission</title>
</head>
<body>


<div class="container">
  <h2>Admission Form</h2>
  <form action="signupprocess.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your First name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
      </div>
    </div>
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
          <label for="course">Course</label>
        </div>
        <div class="col-75">
          <input type="text" id="course" name="course" placeholder="Course">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="mail">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="mail" name="mail" placeholder="Email">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="pic">Picture</label>
        </div>
        <div class="col-75">
          <input type="file" id="pic" name="pic" accept="image/png, image/gif, image/jpeg">
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
<label for="linker" style="color:red">Already Have an account?</label>
    <a href="log.php" >Login</a>
    <div class="row">
      <input type="submit" name="signup" value="Signup">
    </div>
  </form>
</div>

</body>
</html>
