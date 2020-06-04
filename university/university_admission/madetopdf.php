<?php

require_once __DIR__ . '/vendor/autoload.php';

$anum =$_POST['Anum'];
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



$stylesheet = file_get_contents('pdf.css');
$mpdf = new \Mpdf\Mpdf();

$data = '';
$data .= '<h1>University Admission Detail<h1>';
$data .= '<h2>I Candidate Information<h2>';
$data .= '<p><p>';
$data .= '1] Application Number : '. $anum . '<br />';
$data .= '2] First Name : ' . $fname . '<br />';
$data .= '3] Last Name : ' . $lname . '<br />';
$data .= '4] Email : '.  $email . '<br />';
$data .= "5] Gender : ".  $gender . '<br />';

$data .= '<h2>II Academic Information<h2>';
$data .= '<p><p>';
$data .= '1] Board of education in 10th : ' . $board . '<br />';
$data .= '2] Medium of education in 10th : ' . $med . '<br />';
$data .= '3] 10th Math Score : ' . $mscore . '<br />';
$data .= '4] 10th science score : ' . $sscore . '<br />';
$data .= '5] 10th English score : ' . $escore . '<br />';
$data .= '6] 10th overall score : ' . $Oscore . '<br />';
$data .= '7] Board of education in 12th : ' . $board12 . '<br />';
$data .= '8] 12th math score : ' . $mscore12 . '<br />';
$data .= '9] 12th Physics score : ' . $pscore . '<br />';
$data .= '10] 12th Chemistry score : ' . $cscore . '<br />';
$data .= '11] 12th Optional Subject score : ' . $opscore . '<br />';
$data .= '12] 12th Overall Score : ' . $oscore12 . '<br />';
$data .= '13] CET/COMEDK Rank : ' . $cet . '<br />';

$data .= '<h2>III Extra-curricular Activity<h2>';
$data .= '<p><p>';
$data .= '1] Have you participated in Extra curriculam acivity in school : '. $ecact . '<br />';
$data .= '2] Level of participation/achiviement in extra curricular activity :   ' . $level . '<br />';

$data .= '<h2>IV Family<h2>';
$data .= '<p><p>';
$data .= '1] Father\'s Highest Qualification : ' . $fqual . '<br />';
$data .= '2] Mother\'s Highest Qualification :' . $mqual . '<br />';
$data .= '3] Family Annual Income :' . $income . '<br />';

$data .= '<h2>V Personel Information <h2>';
$data .= '<p><p>';
$data .= '1] Did you move out of your permanent address for the sole purpose of attending this Graduation Program ? : ' . $padd . '<br />';
$data .= '2] Distance between the institute and current residence : ' . $dist . '<br />';
$data .= '3] How would you rate yourself in English : ' . $erate . '<br />';
$data .= '4] Rate your Logical Reasoning (1-low to 5-highest) :' . $logic. '<br />';
$data .= '5] What do you describe yourself as  : ' . $desc. '<br />';
$data .= '6] Are you an active procastinator : ' . $proc . '<br />';
$data .= '7] Do you like Research/Explore into something new :' . $resc . '<br />';
$mpdf->WriteHTML($stylesheet,1); 
$mpdf -> WriteHtml($data,0);

$mpdf -> output($anum .'.pdf','D');

?>








