
<?php
if (isset($_POST["submit"])  ){


  $filereader = fopen("database2.txt", "r");
    while(! feof($filereader)){
      $line = fgets($filereader);
      if(strpos($line, $_POST["email"]) && strpos($line, $_POST["password"]) ){

        header('location:FileUpload1.php');

          break;
      }

      }
    }
  
  

?>



<form method="POST">
  
  Email: <input type="email" name="email" /><br />
  Password: <input type="password" name="password" /><br />
  
  <input type="submit" name="submit" value="Login" />
</form>
