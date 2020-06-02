<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FORM</title>
    <link rel="stylesheet" href="styleform.css" type="text/css"/>
    <script src="https://kit.fontawesome.com/868cad16b6.js" crossorigin="anonymous"></script>

</head>
<body>
 
   <header>

   </header>
  
    <div class ="container">
       <div class=header>
              <h1>University Admission Form</h1>
        </div>
        <section>
            <div id="result">
                
            </div>
            <form  method="POST" action="">
                 <lable> 1] Application number:</lable>
                <input type="text" name="Anum" Requried ="" Placeholder=" "><br><br>
                <lable>2] Student's  Name:</lable>
                <input type="text" name="Fname" Requried ="" Placeholder="First Name">
                <input type="text" name="Lname" Requried ="" Placeholder="Last Name">
                <br/> <br/>
                <lable>3] Student's Email Id :</lable>
                <input type="email" name="email" Requried ="" Placeholder="Email">
                <br/><br/>
                <lable>4] Gender:</lable>
                <input type="radio" name="gender" value="Male" >
                <label for="Male">Male</label> &nbsp;
                <input type="radio" name="gender" value="Female" >
                <label for="Female">Female</label> &nbsp;
                <input type="radio" name="gender" value="pntd"  >
                <label for="pntd">Prefered Not To Disclose</label> &nbsp;
                <input type="radio" name="gender" value="Others"  >
                <label for="Others">Others</label> <br><br>

                <lable>5] Board of education in 10th:</lable>
                <input type="radio" name="board" value="State" >
                <label for="State">State</label> &nbsp;
                <input type="radio" name="board" value="CBSE" >
                <label for="CBSE">CBSE</label> &nbsp;
                <input type="radio" name="board" value="ICSE"  >
                <label for="ICSE">ICSE</label> &nbsp;
                <input type="radio" name="board" value="Others"  >
                <label for="Others">Others</label> <br><br>

                <lable>6] Medium of education in 10th:</lable>
                <input type="radio" name="med" value="English" >
                <label for="English">English</label> &nbsp;
                <input type="radio" name="med" value="Hindi" >
                <label for="Hindi">Hindi</label> &nbsp;
                <input type="radio" name="med" value="Kannada"  >
                <label for="Kannada">Kannada</label> &nbsp;
                <input type="radio" name="med" value="Others"  >
                <label for="Others">Others</label> <br><br>

                <lable>7] 10th Math Score:</lable>
                <input type="Text" name="Mscore" Requried ="" Placeholder=" "><br><br>

                
                <lable>8] 10th Science Score:</lable>
                <input type="Text" name="Sscore" Requried ="" Placeholder=" "><br><br>

                
                <lable>9] 10th English Score:</lable>
                <input type="Text" name="Escore" Requried ="" Placeholder=" "><br><br>

                
                <lable>10] 10th Overall Score:</lable>
                <input type="Text" name="Oscore" Requried ="" Placeholder=" "><br><br>

                <lable>11] Board of education in 12th:</lable>
                <input type="radio" name="board12" value="State" >
                <label for="State">State</label> &nbsp;
                <input type="radio" name="board12" value="CBSE" >
                <label for="CBSE">CBSE</label> &nbsp;
                <input type="radio" name="board12" value="ICSE"  >
                <label for="ICSE">ICSE</label> &nbsp;
                <input type="radio" name="board12" value="Others"  >
                <label for="Others">Others</label> <br><br>

                <lable>12] 12th Math Score:</lable>
                <input type="Text" name="Mscore12" Requried ="" Placeholder=" "><br><br>

                <lable>13] 12th Physics Score:</lable>
                <input type="Text" name="Pscore" Requried ="" Placeholder=" "><br><br>

                <lable>14] 12th Chemistry Score:</lable>
                <input type="Text" name="Cscore" Requried ="" Placeholder=" "><br><br>

                <lable>15] 12th Optional Subject Score(Ele\Bio\Cs\etc):</lable>
                <input type="Text" name="Opscore" Requried ="" Placeholder=" "><br><br>

                <lable>16] 12th Overall Score:</lable>
                <input type="Text" name="Oscore12" Requried ="" Placeholder=" "><br><br>

                <lable>17] CET/COMEDK Rank:</lable>
                <input type="Text" name="Crank" Requried ="" Placeholder=" "><br><br>
                
                <lable>18] How would you rate yourself in English :</lable>
                <input type="radio" name="Erate" value="Beginner" >
                <label for="Beginner">Beginner</label> &nbsp;
                <input type="radio" name="Erate" value="Intermediate" >
                <label for="Intermediate">Intermediate</label> &nbsp;
                <input type="radio" name="Erate" value="Native Speaker"  >
                <label for="Native Speaker">Native Speaker</label> <br><br>

                <lable>19] Have you participated in Extra-curriculam activites in school/college :</lable>
                <input type="radio" name="ECact" value="Yes" >
                <label for="Yes">Yes</label> &nbsp;
                <input type="radio" name="ECact" value="No"  >
                <label for="No">No</label> <br><br>

                <lable>20] Level of participation/achiviement in extra curricular activity :</lable><br><br>
                <input type="radio" name="level" value="School Level/College Level" >
                <label for="School Level/College Level">School Level/College Level</label> <br><br>
                <input type="radio" name="level" value="Regional/District/Inter-School-College Level " >
                <label for="Regional/District/Inter-School-College Level ">Regional/District/Inter-School-College Level </label> <br><br>
                <input type="radio" name="level" value="State Level"  >
                <label for="State Level">State Level</label> <br><br>
                <input type="radio" name="level" value="National Level"  >
                <label for="National Level">National Level</label> <br><br>
                <input type="radio" name="level" value="International Level"  >
                <label for="International Level">International Level</label> <br><br>

                <lable>21] Father's Highest Qualification :</lable><br><br>
                <input type="radio" name="fqual" value="Below 10th Std" >
                <label for="Below 10th std">Below 10th std</label> <br><br>
                <input type="radio" name="fqual" value="10th Std " >
                <label for="10th Std ">10th Std </label> <br><br>
                <input type="radio" name="fqual" value="11th Std"  >
                <label for="11th Std">11th Std</label> <br><br>
                <input type="radio" name="fqual" value="12th Std"  >
                <label for="12th Std">12th Std</label> <br><br>
                <input type="radio" name="fqual" value="Diploma"  >
                <label for="Diploma">Diploma</label> <br><br>
                <input type="radio" name="fqual" value="Bachelors"  >
                <label for="Bachelors">Bachelors</label> <br><br>
                <input type="radio" name="fqual" value="Masters"  >
                <label for="Masters">Masters</label> <br><br>
                <input type="radio" name="fqual" value="Phd"  >
                <label for="Phd">Phd</label> <br><br>

                <lable>22] Mothers's Highest Qualification :</lable><br><br>
                <input type="radio" name="Mqual" value="Below 10th Std" >
                <label for="Below 10th std">Below 10th std</label> <br><br>
                <input type="radio" name="Mqual" value="10th Std " >
                <label for="10th Std ">10th Std </label> <br><br>
                <input type="radio" name="Mqual" value="11th Std"  >
                <label for="11th Std">11th Std</label> <br><br>
                <input type="radio" name="Mqual" value="12th Std"  >
                <label for="12th Std">12th Std</label> <br><br>
                <input type="radio" name="Mqual" value="Diploma"  >
                <label for="Diploma">Diploma</label> <br><br>
                <input type="radio" name="Mqual" value="Bachelors"  >
                <label for="Bachelors">Bachelors</label> <br><br>
                <input type="radio" name="Mqual" value="Masters"  >
                <label for="Masters">Masters</label> <br><br>
                <input type="radio" name="Mqual" value="Phd"  >
                <label for="Phd">Phd</label> <br><br>

                <lable>23] Anuual Family Income:</lable>
                <input type="Text" name="income" Requried ="" Placeholder=" "><br><br>

                <lable>24] Did you move out of your permanent address for the sole purpose of attending this Graduation Program ? </lable><br><br>
                <input type="radio" name="padd" value="Yes" >
                <label for="Yes">Yes</label> <br><br>
                <input type="radio" name="padd" value="No"  >
                <label for="No">No</label> <br><br>

                <lable>25] Distance between the institute and current residence:</lable>
                <input type="Text" name="dist" Requried ="" Placeholder=" "><br><br>

                <lable>26] Rate your Logical Reasoning (1-low to 5-highest) :</lable><br><br>
                <input type="radio" name="Logic" value="1" >
                <label for="1">1</label> <br><br>
                <input type="radio" name="Logic" value="2 " >
                <label for="2 ">2 </label> <br><br>
                <input type="radio" name="Logic" value="3"  >
                <label for="3">3</label> <br><br>
                <input type="radio" name="Logic" value="4"  >
                <label for="4">4</label> <br><br>
                <input type="radio" name="Logic" value="5"  >
                <label for="5">5</label> <br><br>

                <lable>27] What do you describe yourself as :</lable><br><br>
                <input type="radio" name="desc" value="Introvert" >
                <label for="Introvert">Introvert</label> <br><br>
                <input type="radio" name="desc" value="Ambivert " >
                <label for="Ambivert ">Ambivert </label> <br><br>
                <input type="radio" name="desc" value="Extovert"  >
                <label for="Extovert">Extovert</label> <br><br>

                <div class="footer">
               <button type="Button"><i class="fas fa-arrow-left"></i></button>
        <button type="Submit" formaction=" madetopdf.php "><i class="fas fa-file-pdf"></i></button>
      <button type="Submit" formaction="test.php"><i class="fas fa-arrow-right"></i></button>
      
      </div>  
            </form>
        </section>
       
     </div> 
   
</body>   
    
     
</html>