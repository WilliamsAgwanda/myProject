<?php
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$adm=$_POST['adm'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$idno=$_POST['idno'];
$school=$_POST['school'];
$course=$_POST['course'];
$gender=$_POST['gender'];

if( isset($_POST['submit'])){
	$file=$_FILES['file'];
	//print_r($file);
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];

	$fileExt= explode('.',$fileName);
	$fileActualExt= strtolower(end($fileExt));
	$allowed= array('jpg','jpeg','png','pdf');
	if(in_array($fileActualExt,$allowed)){
		if($fileError===0){
			if($fileSize<10000000000){
               $fileNameNew= uniqid('',true).".".$fileActualExt;
			   $fileDestination='images/'.$fileNameNew;
			   $profile=$fileDestination;
			   $prof=$fileNameNew;
               move_uploaded_file($fileTmpName, $fileDestination);
                
			   include_once 'hhh.php';
			  
               
                      $psid=$_SESSION['id'];
                      //echo $psid;
                     
$sql = "UPDATE student120 SET fname = '$fname',lname='$lname',adm = '$adm',course = '$course',idno = '$idno',gender='$gender',school='$school',prof='$prof',email='$email',phoneno='$phoneno'
 WHERE adm='$psid'";
                       $query = mysqli_query($conn, $sql);
                        if($query)
                        {
                          header("Location:data.php");
                    
                        }
                       
              
              
              else{
               
                 header("Location:dataup.php");
              }
              
 
      
     
             }else{
				echo "your file is too big!";
			}

		}else{
			echo "there was an error uploading your file!";
		}

	}else{
		echo "you cannot upload files of this type!";
	}


}

?>