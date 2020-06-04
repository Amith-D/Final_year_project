
<!DOCTYPE html>
<html>
<head>
    <title>Archive</title>
    <link rel="stylesheet" href="archivestyle.css" type="text/css"/>
    <script src="https://kit.fontawesome.com/868cad16b6.js" crossorigin="anonymous"></script>
</head>
<body>
<div  class="container">
    <h1>Student Database</h1>
        <div style="overflow-x:auto;"class= wrapper>
        <table class="content-table">
            <thead>
                <div style="position:fixed;" class ="header">
                        <tr>
                        <th>Application No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Board of Edu. in 10th</th>
                        <th>10th Math Score</th>
                         <th> 10th Science Score</th>
                         <th>10th English Score</th>
                         <th>Overall 10th Score </th>
                         <th>Board of Edu. in 12th</th>
                         <th>12th Math score</th>
                         <th>12th Physics Score</th>
                         <th>12th Chemistry Score</th>
                         <th>12th Opt. Score</th>
                         <th>Overall 12th Score </th>
                         <th>CET/Comedk Rank</th>
                         <th>Extra-curriculam activites</th>
                         <th>Level of Participation</th>
                         <th>Father's Qualification </th>
                         <th>Mothers's Qualification </th>
                         <th>Annual Income</th>
                         <th>Move out for UG</th>
                         <th>Distance</th>
                         <th>Rate your English</th>
                          <th>Rate your Logical Reasoning</th>
                          <th>Describe Yourself</th>
                          <th>Active Procastinator</th>
                          <th>Research</th>
                        <th>Delete</th>
                        </tr>
                </div>
            </thead>

            <tbody>
                
                            <?php
                            include("connectdb.php");
                            $sql="SELECT * FROM student";
                            $query = mysqli_query($conn,$sql);
                        
                            while($res=mysqli_fetch_array($query)){

                        ?>
                        <tr>
                            <td><?php echo $res['Application No']; ?></td>
                            <td><?php echo $res['First Name']; ?></td>
                            <td><?php echo $res['Last name']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['Gender']; ?></td>
                            <td><?php echo $res['Board of Ed in tenth']; ?></td>
                            <td><?php echo $res['Med of edu in tenth']; ?></td>
                            <td><?php echo $res['tenth math score']; ?></td>
                            <td><?php echo $res['tenth Science']; ?></td>
                            <td><?php echo $res['tenth English']; ?></td>
                            <td><?php echo $res['tenth overall score']; ?></td>
                            <td><?php echo $res['Board of Ed in tewlfth']; ?></td>
                            <td><?php echo $res['twel math']; ?></td>
                            <td><?php echo $res['twel physics']; ?></td>
                            <td><?php echo $res['twel chem']; ?></td>
                            <td><?php echo $res['twel optional']; ?></td>
                            <td><?php echo $res['Overall twel']; ?></td>
                            <td><?php echo $res['cet or comedk']; ?></td>
                            <td><?php echo $res['Extra-curriculam activities']; ?></td>
                            <td><?php echo $res['level of participation']; ?></td>
                            <td><?php echo $res['Father Qual']; ?></td>
                            <td><?php echo $res['Mother Qual']; ?></td>
                            <td><?php echo $res['Annual Income']; ?></td>
                            <td><?php echo $res['Move out for UG']; ?></td>
                            <td><?php echo $res['Distance']; ?></td>
                            <td><?php echo $res['Rate your english']; ?></td>
                            <td><?php echo $res['Rate your logical reasoning']; ?></td>
                            <td><?php echo $res['Describe yourself']; ?></td>
                            <td><?php echo $res['Active Procastinator']; ?></td>
                            <td><?php echo $res['Research']; ?></td>
                            <td><a href="#" data-toggle="tooltip" title="Delete">
                                <i class="fas fa-trash"></i></a></td>
                        </tr>
                            <?php
                                }
                            ?>
                    

  </tbody>
        </table>
        </div>
</div>

</body>
</html>