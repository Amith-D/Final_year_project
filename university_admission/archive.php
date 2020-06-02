
<!DOCTYPE html>
<html>
<head>
    <title>Archive</title>
    <link rel="stylesheet" href="archivestyle.css" type="text/css"/>
    <script src="https://kit.fontawesome.com/868cad16b6.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>Student Database</h1>
        <table class="content-table">
            <thead>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include("connectdb.php");
                $sql="SELECT * FROM student_data";
                $query = mysqli_query($conn,$sql);
              
                while($res=mysqli_fetch_array($query)){

               ?>
            <tr>
                 <td><?php echo $res['firstname']; ?></td>
                 <td><?php echo $res['lastname']; ?></td>
                  <td><?php echo $res['email']; ?></td>
                  <td><?php echo $res['gender']; ?></td>
                 <td><a href="#" data-toggle="tooltip" title="Delete">
                    <i class="fas fa-trash"></i></a></td>
            </tr>
                <?php
                    }
                ?>
    

  </tbody>
        </table>

</div>

</body>
</html>