<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FORM</title>
    <link rel="stylesheet" href="styleform.css" type="text/css"/>
    <script src="https://kit.fontawesome.com/868cad16b6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

</head>
<body>
 
   <header>

   </header>
  
    <div class ="container">
       <div class=header>
              <h1 style="font-family:'Montaga', serif">University Admission Form</h1>
        </div>
        <section>
            <div id="result">
                
            </div>
            <form  method="POST" action="">
                 <lable> Application number:</lable>
                <input type="text" name="Anum" Requried ="" Placeholder="Application number"><br><br><br><br>

                <legend style="font-size: 1.4em;
                margin-bottom: 15px;
                font-family:'Montaga', serif;">
                <span style="background:#297085;
	            color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 15px 15px 15px 0px;">1
               </span> 
                Candidate Information</legend>

                <lable>1] Student's Name:</lable>
                <input type="text" name="Fname" Requried ="" Placeholder="First Name">
                <input type="text" name="Lname" Requried ="" Placeholder="Last Name">
                <br/> <br/>
                <lable>2] Student's Email Id :</lable>
                <input type="email" name="email" Requried ="" Placeholder="Email">
                <br/><br/>
                <lable>3] Gender:</lable>
                <input type="radio" name="gender" value="Male" >
                <label for="Male">Male</label> &nbsp;
                <input type="radio" name="gender" value="Female" >
                <label for="Female">Female</label> &nbsp;
                <input type="radio" name="gender" value="pntd"  >
                <label for="pntd">Prefered Not To Disclose</label> &nbsp;
                <input type="radio" name="gender" value="Others"  >
                <label for="Others">Others</label> <br><br><br><br>
               
                <legend style="font-size: 1.4em;
                margin-bottom: 15px;
                font-family:'Montaga', serif;">
                <span style="background:#297085;
	            color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 15px 15px 15px 0px;">2
               </span> 
                Academic Information</legend>

                <lable>1] Board of education in 10th:</lable>
                <input type="radio" name="board" value="State" >
                <label for="State">State</label> &nbsp;
                <input type="radio" name="board" value="CBSE" >
                <label for="CBSE">CBSE</label> &nbsp;
                <input type="radio" name="board" value="ICSE"  >
                <label for="ICSE">ICSE</label> &nbsp;
                <input type="radio" name="board" value="Others"  >
                <label for="Others">Others</label> <br><br>

                <lable>2] Medium of education in 10th:</lable>
                <input type="radio" name="med" value="English" >
                <label for="English">English</label> &nbsp;
                <input type="radio" name="med" value="Hindi" >
                <label for="Hindi">Hindi</label> &nbsp;
                <input type="radio" name="med" value="Kannada"  >
                <label for="Kannada">Kannada</label> &nbsp;
                <input type="radio" name="med" value="Others"  >
                <label for="Others">Others</label> <br><br>

                <lable>3] 10th Math Score:</lable>
                <input type="Text" name="Mscore" Requried ="" Placeholder=" "><br><br>

                
                <lable>4] 10th Science Score:</lable>
                <input type="Text" name="Sscore" Requried ="" Placeholder=" "><br><br>

                
                <lable>5] 10th English Score:</lable>
                <input type="Text" name="Escore" Requried ="" Placeholder=" "><br><br>

                
                <lable>6] 10th Overall Score:</lable>
                <input type="Text" name="Oscore" Requried ="" Placeholder=" "><br><br>

                <lable>7] Board of education in 12th:</lable>
                <input type="radio" name="board12" value="State" >
                <label for="State">State</label> &nbsp;
                <input type="radio" name="board12" value="CBSE" >
                <label for="CBSE">CBSE</label> &nbsp;
                <input type="radio" name="board12" value="ICSE"  >
                <label for="ICSE">ICSE</label> &nbsp;
                <input type="radio" name="board12" value="Others"  >
                <label for="Others">Others</label> <br><br>

                <lable>8] 12th Math Score:</lable>
                <input type="Text" name="Mscore12" Requried ="" Placeholder=" "><br><br>

                <lable>9] 12th Physics Score:</lable>
                <input type="Text" name="Pscore" Requried ="" Placeholder=" "><br><br>

                <lable>10] 12th Chemistry Score:</lable>
                <input type="Text" name="Cscore" Requried ="" Placeholder=" "><br><br>

                <lable>11] 12th Optional Subject Score(Ele\Bio\Cs\etc):</lable>
                <input type="Text" name="Opscore" Requried ="" Placeholder=" "><br><br>

                <lable>12] 12th Overall Score:</lable>
                <input type="Text" name="Oscore12" Requried ="" Placeholder=" "><br><br>

                <lable>13] CET/COMEDK Rank:</lable>
                <input type="Text" name="Crank" Requried ="" Placeholder=" "><br><br><br><br>
               
                <legend style="font-size: 1.4em;
                margin-bottom: 15px;
                font-family:'Montaga', serif;">
                <span style="background:#297085;
	            color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 15px 15px 15px 0px;">3
               </span> 
                Extra-curricular activity</legend>

                <lable>1] Have you participated in Extra-curriculam activites in school/college :</lable>
                <input type="radio" name="ECact" value="Yes" >
                <label for="Yes">Yes</label> &nbsp;
                <input type="radio" name="ECact" value="No"  >
                <label for="No">No</label> <br><br>

                <lable>2] Level of participation/achiviement in extra curricular activity :</lable><br><br>
                <input type="radio" name="level" value="School Level/College Level" >
                <label for="School Level/College Level">School Level/College Level</label> <br><br>
                <input type="radio" name="level" value="Regional/District/Inter-School-College Level " >
                <label for="Regional/District/Inter-School-College Level ">Regional/District/Inter-School-College Level </label> <br><br>
                <input type="radio" name="level" value="State Level"  >
                <label for="State Level">State Level</label> <br><br>
                <input type="radio" name="level" value="National Level"  >
                <label for="National Level">National Level</label> <br><br>
                <input type="radio" name="level" value="International Level"  >
                <label for="International Level">International Level</label> <br><br><br><br>

                <legend style="font-size: 1.4em;
                margin-bottom: 15px;
                font-family:'Montaga', serif;">
                <span style="background:#297085;
	            color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 15px 15px 15px 0px;">4
               </span> 
                Family</legend>
                <lable>1] Father's Highest Qualification :</lable><br><br>
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

                <lable>2] Mothers's Highest Qualification :</lable><br><br>
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

                <lable>3] Anuual Family Income:</lable>
                <input type="Text" name="income" Requried ="" Placeholder=" "><br><br><br><br>

                <legend style="font-size: 1.4em;
                margin-bottom: 15px;
                font-family:'Montaga', serif;">
                <span style="background:#297085;
	            color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 15px 15px 15px 0px;">5
               </span> 
                Personal Information </legend>
                <lable>1] Did you move out of your permanent address for the sole purpose of attending this Graduation Program ? </lable><br><br>
                <input type="radio" name="padd" value="Yes" >
                <label for="Yes">Yes</label> <br><br>
                <input type="radio" name="padd" value="No"  >
                <label for="No">No</label> <br><br>

                <lable>2] Distance between the institute and current residence:</lable>
                <input type="Text" name="dist" Requried ="" Placeholder=" "><br><br>

                <lable>3] How would you rate yourself in English :</lable>
                <input type="radio" name="Erate" value="Beginner" >
                <label for="Beginner">Beginner</label> &nbsp;
                <input type="radio" name="Erate" value="Intermediate" >
                <label for="Intermediate">Intermediate</label> &nbsp;
                <input type="radio" name="Erate" value="Native Speaker"  >
                <label for="Native Speaker">Native Speaker</label> <br><br>

                <lable>4] Rate your Logical Reasoning (1-low to 5-highest) :</lable><br><br>
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

                <lable>5] What do you describe yourself as :</lable><br><br>
                <input type="radio" name="desc" value="Introvert" >
                <label for="Introvert">Introvert</label> <br><br>
                <input type="radio" name="desc" value="Ambivert " >
                <label for="Ambivert ">Ambivert </label> <br><br>
                <input type="radio" name="desc" value="Extovert"  >
                <label for="Extovert">Extovert</label> <br><br>

                <lable>6] Are you an active procastinator:</lable><br><br>
                <input type="radio" name="proc" value="Yes" >
                <label for="Yes">Yes</label> <br><br>
                <input type="radio" name="proc" value="No " >
                <label for="No ">No </label> <br><br>

                <lable>7] Do you like Research/Explore into something new :</lable><br><br>
                <input type="radio" name="research" value="Yes" >
                <label for="Yes">Yes</label> <br><br>
                <input type="radio" name="research" value="No " >
                <label for="No ">No </label> <br><br>

                <div class="footer">
               <button style="margin-left: 130px;" type="Button"><i class="fas fa-arrow-left"></i></button>
        <button style="margin-left: 130px;"type="Submit" formaction=" madetopdf.php "><i class="fas fa-file-pdf"></i></button>
      <button name= "done" style="margin-left: 130px;" type="Submit" formaction="insert.php"><i class="fas fa-arrow-right"></i></button>
      
      </div>  
            </form>
        </section>
       
     </div> 
   
</body>   
    
     
</html>