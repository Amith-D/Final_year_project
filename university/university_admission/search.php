<?php
include('connectdb.php');
?>

<html>
    <head>
        <title>search</title>
        <script src="https://kit.fontawesome.com/868cad16b6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="searchstyle.css" type="text/css">
    </head>
<body>

<div class="header">
<div class = "form">
<form action="search.php" method="POST">
<input type="text" name="appfnln" placeholder="Search">
<button type="submit" name = "search"><i class="fas fa-search"></i></button>
</form>  
</div>
<Div class = "container" >
 <h2>Student Details</h2>
 <?php
if (isset($_POST['search']))
{
    $search = mysqli_real_escape_string($conn,$_POST['appfnln']);
    $sql = "SELECT * FROM student WHERE `Application No` LIKE '%$search%' OR `First Name` LIKE '%$search%' OR `Last name` LIKE '%$search%' ";
    $result = mysqli_query($conn,$sql);

    $queryResults = mysqli_num_rows($result);
 if($queryResults >0)
 {
    while($row = mysqli_fetch_assoc($result))
    {
        echo " <div class = 'reswrap'
        <p> Search Results  for ".$search." </p>
        <p>Application Number:".$row["Application No"]."</p>
         <p> First Name : " . $row["First Name"] ."</p>
        <p> Last Name : " . $row["Last name"] . "</p>
        <p>Email : ".  $row["email"] . "</p>
        <p> Gender : ".  $row["Gender"] . "</p><br><br>
       
       </div> ";
    }
 } else{
     echo"NO Results Found !";
 }
}
?>
</Div>
</div>



</body>
</html>