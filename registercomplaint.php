<?php
 
      include("connect.php");  // connect to database
 
      if (isset($_POST['b1'])  && !empty($_POST['q1'])) {   
            $i = rand(10000,50000);                       
            mysqli_query($conn,
                  "insert into complaint_against_university set
                        name  = '".$_POST['q1']."'  ,
                        parent_name   = '".$_POST['q2']."',
                        age   = '".$_POST['q3']."',
                        address  = '".$_POST['q4']."'  ,
                        gender    = '".$_POST['q5']."'  ,             
                        inc_datetime  = '".$_POST['q6']."',
                         reg_datetime  = '".$_POST['q7']."',
                         complaint   = '".$_POST['q8']."',
                         section  = '".$_POST['q9']."'  ,
                         category  = '".$_POST['q10']."' ,
                         qid2  = '".$i."'");
                         
              if (isset($_POST['b1']) && !empty($_POST['q1']))
             {
                  echo
                  "<b>Your Complaint registered Successfully<br>your Complaint no is $i .
                    kindly remember this no for further assistance";
             }           
         }
?>
 
<html lang="en">
 <head>
 
     <!-- Required meta tags -->
     <meta charset="utf-8">
         <link rel="stylesheet" href="Login/css/firstat.css">
         <meta name="viewport" content=
             "width=device-width, initial-scale=1, shrink-to-fit=no">
      
     <!-- Bootstrap CSS -->
     <link href=
     "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity=
     "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
    
    <title>Register your complaint Against University</title>
    <style type="text/css">
        .registerform{
            margin-top: 5%;
            width:50vw;
            max-width: 90vw;
        }
        .form-group{
            margin: 2vw;
        }       
    </style>
  </head>
  <body>
       <h1 align ="center" style="color:red;">
          Register Your Complaint Against University</h1>
 
       <center>
       <div class=" card registerform">
          <form name="frm" action="?" method="post" align="center">
         
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter name"
             name="q1" id="q1">
          </div>
           
          <div class="form-group">
            <label>Father/Mother name</label>
            <input type="text" class="form-control"
               placeholder="Enter name of father or mother" name="q2" id="q2">
          </div>
           
          <div class="form-group">
            <label>Age</label>
            <input type="number"class="form-control" placeholder="Enter Age"
               name="q3" id="q3">
          </div>
           
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" placeholder="Enter address"
              name="q4" id="q4"></textarea>
          </div>
           
          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" placeholder="Enter Gender"
                      name="q5" id="q5">
          </div>
           
           <div class="form-group">
            <label>Date and time of incidence</label>
            <input type="datetime-local" class="form-control"
                 placeholder="Enter date and time" name="q6" id="q6">
          </div>
           
           <div class="form-group">
            <label>Date and time of registration</label>
            <input type="datetime-local" class="form-control"
                    placeholder="Enter date and time" name="q7" id="q7">
          </div>
           
           <div class="form-group">
            <label>Complaint</label>
               <textarea type="text" class="form-control"
                    placeholder="Enter complaint"
                     name="q8" id="q8"></textarea>
           </div>
           
           <div class="form-group">
            <label>Section</label>
            <input type="text" class="form-control"
             placeholder="section"
                  name="q9" id="q9">
           </div>
           
          <div class="form-group">
            <label>Select Complaint Type</label>
            <select class="form-control" name="q10" id="q10">
              <option>New furniture</option>
              <option>Theft                </option>
              <option>Violence    </option>
              <option>Lost and Found    </option>
              <option>Stolen Vehicle    </option>
              <option>Missing Person    </option>
              <option>Others            </option>
            </select>
          </div>   
                     
          <button class="btn btn-lg btn-warning" type="submit"
            id="b1" name="b1">
                Submit
          </button>
        </form>      
     </div>
    </center>
 </body>
</html>