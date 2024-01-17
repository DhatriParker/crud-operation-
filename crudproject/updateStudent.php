<?php
$id=$_REQUEST["id"];
$name=$_REQUEST["txtName"];
$fname=$_REQUEST["txtFName"];
// $address=$_REQUEST["txtAdd"];
// $email=$_REQUEST["txtEmail"];
// $contact=$_REQUEST["txtContact"];
// $gender=$_REQUEST["txtGen"];
// $hobby=$_REQUEST["txtHobby"];
// $dob=$_REQUEST["txtDob"];

    include("connection.php");
mysqli_query($con,"update student_info set s_name='$name',s_fname='$fname' where s_id='$id'") or die ("query error");

header("location:displayStudent.php");

?>