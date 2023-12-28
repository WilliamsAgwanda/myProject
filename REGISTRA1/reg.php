<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$regno=$_POST['regno'];
$course=$_POST['course'];
$idno=$_POST['idno'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
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
			   $sql = "INSERT INTO student(regno,firstname,lastname,course,idno,phoneno,email,gender,imager)
				VALUES('$regno','$fname','$lname','$course','$idno','$phoneno','$email','$gender','$prof');";
			   mysqli_query($conn, $sql);
/*$username="root";
$password="ikusay1";
$server="localhost";
$db="computing";

$conn=mysqli_connect($server,$username,$password,$db);
 if (mysqli_connect_error()) {
     # code...
     echo "Failed: ";
 }
 else{
     echo 'Connectioon successful';
 }
 $enter="insert into student(regno,firstname,lastname,course,idno,phoneno,email,gender,image)values($regno,$fname,$lname,$course,$idno,$phoneno,$email,$gender
 ,$fileNameNew)";
 mysqli_query($conn,$enter)or die(mysqli_error($conn)); 

			  
$filename=fopen("student.txt","a+");
$txt=$fname."\t".$lname."\t".$regno."\t".$course."\t".$idno."\t".$phoneno."\t".$email."\t".$gender."\t".  $fileNameNew."\t"."\n";
fwrite($filename,$txt);
$gather=file_get_contents("student.txt");
if(strpos($gather,$regno)>0){
	echo "REGISTRATION HAS BEEN SUCCESSFUL\n";
	echo"PROCEED TO LOGIN USING THE LINK IN THE REGISTRATION PORTAL";
}else{
	echo"REGISTRATION ERROR";
}
fclose($filename);*/

 if (file_exists("students1.json")){
            $student = file_get_contents("students1.json");
            $data = json_decode($student,true);
        
                $input = array(
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'regno' => $_POST['regno'],
                    'course' => $_POST['course'],
					'idno'=>$_POST['idno'],
                    'phoneno'=>$_POST['phoneno'],
					 'email'=>$_POST['email'],
					 'gender'=>$_POST['gender'],
                    'pic'=> $profile);
          
                $data[] = $input;
                $fdata = json_encode($data);
                if (file_put_contents('students1.json', $fdata)){
                   echo  "success";
                   header('Location:login1.html');
                }
            }
            
           else {
            echo "File not Found";
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