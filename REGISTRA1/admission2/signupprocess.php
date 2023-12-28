<?php
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["pic"]["name"]); 
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
  $imageFilename = strtolower(pathinfo($target_file,PATHINFO_FILENAME)); 
  $check = getimagesize($_FILES["pic"]["tmp_name"]);
  $admno =  $_POST["admno"];
  
  $newadmn = str_replace('/','_',$admno);
//check filesize
  if ($_FILES["pic"]["size"] > 100000000) {
    //echo "Sorry, your file is too large.";
    $error_1="upload a smaller file size";
    echo '<script>window.alert("'.$error_1.'")</script>';
    //header("Location:Signup.php");
    $uploadOk = 0;
  }

  

  else{

    move_uploaded_file($_FILES["pic"]["tmp_name"], "/images2/{$newadmn}.{$imageFileType}");
    
  if (file_exists("students.json")){
            $student = file_get_contents("students.json");
            $data = json_decode($student,true);
        
                $input = array(
                    'fname' => $_POST["fname"],
                    'lname' => $_POST["lname"],
                    'adm' => $_POST["admno"],
                    'course' => $_POST["course"],
                    'pic' => $newadmn,
                    'pass' => $_POST['password']
                );
                $data[] = $input;
                $fdata = json_encode($data);
                if (file_put_contents('students.json', $fdata)){
                   echo  "success";
                   header('Location:log.php');
                }
            }
            
           else {
            echo "File not Found";
        }
    }
        
      
?>