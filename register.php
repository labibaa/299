<?php
 
    include("connect.php");  // Connect to database
   
 
    if(isset($_POST['b1'])  && !empty($_POST['q1']) 
            && !empty($_POST['q8'] == $_POST['q9'])) {   
         mysqli_query($conn,"insert into login set
                             username = '".$_POST['q3']."',
                            userpassword = '".$_POST['q9']."'");
                     
        $id1 = mysqli_insert_id($conn);
        mysqli_query($conn,"insert into register set
                            firstname = '".$_POST['q1']."'  ,
                            lastname  = '".$_POST['q2']."'  ,
                            username  = '".$_POST['q3']."'  ,
                            dob  = '".$_POST['q4']."'  ,
                            gender  = '".$_POST['q5']."'  ,             
                            email   = '".$_POST['q6']."'  ,
                            mobileno  = '".$_POST['q7']."'  ,
                            password  = '".$_POST['q8']."'  ,
                            repeatpassword  = '".$_POST['q9']."'");
       
        $id2 = mysqli_insert_id($conn);   // Return row id from DB   
        if (isset($_POST['b1'] )  && !empty($_POST['q1'])) {
            echo"<b><i><center>You have Registered Successfully!</center></i></b>";
        }
   }
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content=
          "width=device-width, initial-scale=1">
   
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color:white;
      }
 
      * {
        box-sizing: border-box;
      }
 
      /* Add padding to containers */
      .container {
        padding: 16px;
        background-color: #D3d3d3;
      }
 
      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        border: none;
        background: #f1f1f1;
      }
 
      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
 
      /* Overwrite default styles of hr */
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
 
      /* Set a style for the submit button */
      .registerbtn {
        background-color: #4169E1;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        transition-duration: 0.4sec;
      }
 
      .registerbtn:hover {
         opacity: 1;
      }
 
      /* Add a blue text color to links */
      a {
        color: dodgerblue;
      }
 
      /* Set a grey background color and center
      the text of the "sign in" section */
      .signin {
        background-color: #f1f1f1;
        text-align: center;
      }
    </style>
</head>
<body>
   <form action="?" name="frm1" method="post">
    <div class="container">
      <h1>Register</h1>
       
 
 
<p><h4>Enter Your Credentials to create an account</h4></p>
 
 
 
      <hr>    
       
 
<p>
      <label><b>First Name</b></label>
      <input type="text" placeholder="Enter Your First Name"
      name="q1" id="q1" required>
       
      <label><b>Last name</b></label>
      <input type="text" placeholder="Enter Your Last Name"
      name="q2" id="q2" required>     
       
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username"
       name="q3" id="q3" required>
       
      <label><b>Date of Birth  </b></label>
       <input type="text" placeholder="yyyy-mm-dd"
       name="q4" id="q4" required>
       
      <label><b>Gender</b></label>
      <input type="text" placeholder="Enter Gender"
        name="q5" id="q5" required>
       
      <label><b>E-mail</b></label>
      <input type="text" placeholder="Enter your e-mail"
          name="q6" id="q6" required>
       
      <label><b>Mobile no.</b></label>
      <input type="text" placeholder="Enter your phone number"
         name="q7" id="q7" required>
       
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password"
         name="q8" id="q8" required>
       
      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password"
         name="q9" id="q9" required>
    </p>
 
 
      
 
       <button type="submit" class="registerbtn"
         name="b1" id="b1">
         Register
       </button>
  </div>
   
  <div class="container signin">
       
 
<p>Already have an account?
        <a href="login.php">Log in</a>
     </p>
 
 
  </div>
</form>

 
</body>
</html>