<?php
include("connectdb.php");

if(isset($_POST['done'])){

$anum = $_POST['Anum'];
$fname = $_POST[ 'Fname' ];
$lname = $_POST[ 'Lname' ];
$email = $_POST[ 'email' ];
$gender = $_POST[ 'gender' ];
$board = $_POST['board'];
$med = $_POST['med'];
$mscore = $_POST['Mscore'];
$sscore = $_POST['Sscore'];
$escore = $_POST['Escore'];
$Oscore = $_POST['Oscore'];
$board12 = $_POST['board12'];
$mscore12 = $_POST['Mscore12'];
$pscore = $_POST['Pscore'];
$cscore = $_POST['Cscore'];
$opscore = $_POST['Opscore'];
$oscore12 = $_POST['Oscore12'];
$cet=$_POST['Crank'];
$ecact=$_POST['ECact'];
$level=$_POST['level'];
$fqual=$_POST['fqual'];
$mqual=$_POST['Mqual'];
$income=$_POST['income'];
$padd=$_POST['padd'];
$dist=$_POST['dist'];
$erate=$_POST['Erate'];
$logic=$_POST['Logic']; 
$desc=$_POST['desc'];
$proc=$_POST['proc'];
$resc=$_POST['research'];

$query =  " INSERT INTO `student`(`Application No`, `First Name`,
 `Last name`, `email`, `Gender`, `Board of Ed in tenth`, `Med of edu in tenth`, 
 `tenth math score`, `tenth Science`, `tenth English`, `tenth overall score`, `Board of Ed in tewlfth`, 
 `twel math`, `twel physics`, `twel chem`, `twel optional`, `Overall twel`, `cet or comedk`, 
 `Extra-curriculam activities`, `level of participation`, `Father Qual`, `Mother Qual`, 
 `Annual Income`, `Move out for UG`, `Distance`, `Rate your english`, `Rate your logical reasoning`, 
 `Describe yourself`, `Active Procastinator`, `Research`) 
 VALUES ('$anum','$fname','$lname','$email','$gender','$board','$med ','$mscore','$sscore',
 '$escore','$Oscore','$board12','$mscore12 ','$pscore','$cscore','$opscore ','$oscore12','$cet','$ecact','$level','$fqual',
 '$mqual','$income','$padd','$dist','$erate','$logic','$desc','$proc','$resc')";
 
 if (!mysqli_query($conn, $query)) {
    echo "Error: " . mysqli_error($conn);

}
else{
    echo "<script type='text/javascript'>alert('Form Submitted ')</script>";
}
header("Refresh:5; url=form.php");
}
?>