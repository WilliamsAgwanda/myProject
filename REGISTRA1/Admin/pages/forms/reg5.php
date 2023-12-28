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

$_SESSION['adm']=$adm;

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
			   $sql = "INSERT INTO student120(fname,lname,adm,email,phoneno,idno,school,course,gender,prof)
				VALUES('$fname','$lname','$adm','$email','$phoneno','$idno','$school','$course','$gender','$prof');";
			   mysqli_query($conn, $sql);

               $que= "SELECT fname,lname,adm FROM student120 WHERE adm='$adm';";
               mysqli_query($conn, $que);
 
      
      if (mysqli_num_rows(mysqli_query($conn, $que)) == 0) {
          header("Location:validation.html?error=EnterAllDetails");
          exit();
      }elseif(mysqli_num_rows(mysqli_query($conn, $que))==1) {
        echo '<script>alert("Student records added successfully")</script>';
		$sql = "SELECT * FROM student120;";
          
		$result= mysqli_query($conn,$sql);
		
		$data = mysqli_fetch_array($result);
		$fname= $data['fname'];
		$lname = $data['lname'];
		$adm= $data['adm'];
		$email = $data['email'];
		$phoneno= $data['phoneno'];
		$idno = $data['idno'];
		$school = $data['school'];
		$course = $data['course'];
		$gender= $data['gender'];
		$prof=$data['prof'];
	   
		     
		
		   header("location:stage_1.php");
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