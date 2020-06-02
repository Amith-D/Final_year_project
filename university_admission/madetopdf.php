<?php

require_once __DIR__ . '/vendor/autoload.php';

$fname = $_POST[ 'Fname' ];
$lname = $_POST[ 'Lname' ];
$email = $_POST[ 'email' ];
$gender = $_POST[ 'gender' ];

$stylesheet = file_get_contents('pdf.css');
$mpdf = new \Mpdf\Mpdf();

$data = '';
$data .= '<h1>Student Detail<h1>';
$data .= 'First Name:' . $fname . '<br />';
$data .= 'Last Name:' . $lname . '<br />';
$data .= 'Email :'.  $email . '<br />';
$data .= "Gender :".  $gender . '<br />';
$mpdf->WriteHTML($stylesheet,1); 
$mpdf -> WriteHtml($data,0);

$mpdf -> output('data.pdf','D');

?>