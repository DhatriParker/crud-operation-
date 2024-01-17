<!DOCTYPE html>
<html>
  <title>Student Registration Form
</title>
    <head>
      <link rel="stylesheet" text="txt/css" href="./css/style.css">
    
</head>
<?php
    $id=$_REQUEST["id"];

    include("connection.php");
    $rsStudent=mysqli_query($con,"select * from student_info where s_id='$id'") or die("query error");
    $row=mysqli_fetch_array($rsStudent);
?>
<body>
  <div id="main">
    <h1>Student Registration</h1>
    <form method="get" action="updateStudent.php">
      <lable>Enter Your Name</lable><br>
      <input type="text" name="txtName" value="<?php echo($row['s_name']) ?>"><br>
      

      <lable>Enter Your Fathe Name</lable><br>
      <input type="text" name="txtFName" value="<?php echo($row['s_fname']) ?>"><br>

      <input type="submit" name="submit">
      

     <form>
      
</div>
</body>

</html>