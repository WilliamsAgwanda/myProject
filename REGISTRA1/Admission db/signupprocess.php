<?php
 if(isset($_POST["signup"])){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]); 
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    $imageFilename = strtolower(pathinfo($target_file,PATHINFO_FILENAME)); 
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
   
    $admno = $_POST["admno"];
    $newadm = str_replace('/','_',$admno);
    if ($_FILES["pic"]["size"] > 5000000) {
      $error="Big file";
      echo '<script>window.alert("'.$error.'")</script>';
      $uploadOk = 0;
    }
    else{
      $picture=$newadm.'.'.$imageFileType;
      $imagepic = $imageFilename.'.'.$imageFileType;
      $folder = "images/". $picture;
      if( move_uploaded_file($_FILES["pic"]["tmp_name"], $folder)){
        echo "Uploaded";
      }
      else{
        echo "upload failed";
      }
      
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $admno = $_POST["admno"];
        $course = $_POST["course"];
        $mail = $_POST["mail"];
        $pass = $_POST['password'];

        include_once 'dbconnect.php';
          $sql = "INSERT INTO details(fname,lname,admno,course,email,photo,pass) VALUES('$fname','$lname','$admno','$course','$mail','$picture','$pass');";
          mysqli_query($conn, $sql);
          header("location: log.php?error=none");
    }
 }
else{
    header("Location:signup.php");
    exit();
}
        
      
?>