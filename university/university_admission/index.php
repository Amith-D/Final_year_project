<?php

include("connectdb.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Admissions</title>
    <link rel="stylesheet" href="style.css" type="text/css">
     <script src="https://kit.fontawesome.com/868cad16b6.js" crossorigin="anonymous"></script>
</head>
<body>
   <img src="img/Layer%201.png" class="Layer_1">
   <img src="img/Layer%202.png" class="Layer_2">
    <div class="login">
         <img src="img/avatar.png" class="avatar"/>
         <h2>ADMIN</h2>

             <form method="POST" action="login.php">
               <div class="input">
               <i class="fas fa-user" aria-hidden="true"></i>
                <input placeholder ="Username " type="text" name="user" required =""/>
                 </div>
                 <div class="inputp">
                 <i class="fas fa-lock"></i>
                  <input placeholder ="Password " type="password" name="pass" required =""/>
                  </div>
                  <input class="btn" type="submit" name="" value="Submit"/>
             </form>
         
    </div>
    
    
</body>
</html>
<?php

