<?php
    function emptyInputSignup($fname,$lname,$admno, $course,$mail,$pass){
        $result = false;
        if(empty($fname) || empty($lname) ||empty($admno) || empty($course) || empty($mail) ||empty($pass)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    // function invalidAdm($admno){
    //     $result = false;;
    //     if(!preg_match("/^[A-Z0-9]*$/",$admno)){
    //         $result = true;
    //     }
    //     else{
    //         return $result;
    //     }
    // }
    // function invalidmail($mail){
    //     $result = false;
    //     if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    //         $result = true;
    //     }
    //     else{
    //         $result = false;
    //     }
    // }

    // function admExists($conn,$admno,$mail){
    //     $sql = "SELECT * FROM details WHERE admno = ? OR email = ?;";
    //     $stmnt = mysqli_stmt_init($conn);
    //     if (mysqli_stmt_prepare($stmnt,$sql)) {
    //         header("Location:signup.php?error=stmntfailed");
    //         exit();
    //     }
    //     mysqli_stmt_bind_param($stmnt, "ss",$admno,$mail);
    //     mysqli_stmt_execute($stmnt);
    //     $resultdata = mysqli_stmt_get_result($stmnt);
    //     if($row = mysqli_fetch_assoc($resultdata)){
    //         return $row;
    //     }
    //     else{
    //         $result = false;
    //         return $result;
    //     }
    //     //mysqli_stmt_close($stmnt);
    // }
    // function  createUser($conn,$fname,$lname,$admno, $course,$mail,$pass){
    //     $sql = "INSERT INTO details(fname,lname,admno,course,email,pass) VALUES(?,?,?,?,?,?);";
    //     $stmnt = mysqli_stmt_init($conn);
    //     if (!mysqli_stmt_prepare($stmnt,$sql)) {
    //         header("Location:signup.php?error=stmntfailed");
    //         exit();
    //     }
    //     mysqli_stmt_bind_param($stmnt, "ssssss",$fname,$lname,$admno,$course,$mail,$pass);
    //     mysqli_stmt_execute($stmnt);
    //     mysqli_stmt_close($stmnt);
    //     header("Location:signup.php?error=none");
    //     exit();
    // }

    function  createUser($conn,$fname,$lname,$admno, $course,$mail,$pass){
        $sql = "INSERT INTO details(fname,lname,admno,course,email,pass) VALUES('$fname','$lname',$admno,'$course','$mail','$pass');";
mysqli_query($conn, $sql);
header("location: signup.php?error=none");
   }
?>