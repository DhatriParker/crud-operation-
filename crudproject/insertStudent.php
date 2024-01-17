<?php
$name=$_REQUEST["txtName"];
$fname=$_REQUEST["txtFName"];
// $address=$_REQUEST["txtAdd"];
// $email=$_REQUEST["txtEmail"];
// $contact=$_REQUEST["txtContact"];
// $gender=$_REQUEST["txtGen"];
// $hobby=$_REQUEST["txtHobby"];
// $dob=$_REQUEST["txtDob"];

include("connection.php");
mysqli_query($con,"insert into student_info (s_name,s_fname) values('$name','$fname')");

echo("Data has been saved");
//,s_address,s_email,s_contact,s_gender,s_hoby,s_dob
//,'$address','$email','$contact','$gender','$hobby','$dob'
?>

