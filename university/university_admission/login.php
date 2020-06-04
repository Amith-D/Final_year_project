<?php  
 require('connectdb.php');

if (isset($_POST['user']) and isset($_POST['pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user'];
$password = $_POST['pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE user='$username' and pwd='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
echo $count;
if ($count == 1){
//echo "Login Credentials verified";
header("Location:http://university/university_admission/menu.html");




}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>