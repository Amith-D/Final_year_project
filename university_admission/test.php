<?php
include("connectdb.php");

$fname = $_POST[ 'Fname' ];
$lname = $_POST[ 'Lname' ];
$email = $_POST[ 'email' ];
$gender = $_POST[ 'gender' ];

$query = "INSERT INTO student_data VALUES('$fname','$lname','$email','$gender')";
$data = mysqli_query($conn,$query);
if($data){
   echo"inserted";

}

 ?>