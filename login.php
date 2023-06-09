
<?php
     session_start();   // Session start
 
     include("connect.php");
     if(isset($_POST['b1']) && !empty($_POST['q1']) 
                            && !empty($_POST['q2'])) {
         $q=mysqli_query($conn,
                  "select * from login where username = '"
                  . $_POST['q1'] . "' and userpassword = '"
                  . $_POST['q2'] ."'");
        
         $num = mysqli_num_rows($q);
        
         if($num > 0) {
            $row = mysqli_fetch_array($q);
            if($row['type'] == 0){
              header("location: dashboard.php");
          }
          else{
              header("location: admin.php");
          }
            $_SESSION['sid']   =   $row[0];
            $_SESSION['sname'] =   $row[1];
            
            exit();
         }
         else {
          echo '<script language="javascript">';
          echo 'alert("Sorry Wrong /Invalid Username or Password !")';
          echo '</script>';
         }
        
     }
 
     // LOGOUT CODE
     if(isset($_GET['todo'])  && $_GET['todo']=="logout" ) {
        session_unset();
        //  session_destroy();
     }               
?>
<html>
 
<head>
<title>Login Here</title>
<meta name="viewport" content=
      "width=device-width",initial-scale=1>
   <style>
    body,html {
        height:100%;
        font-family:Arial, Helvetica, sans-serif;
        background-color:#d3d3d3;
    }
 
    * {
      box-sizing: border-box;
    }
 
    .button1 {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration:0.4s;
      cursor: pointer;
    }
    .button1{
        background-color:#FFF;
        color:#000;
        border:2px solid #4caf50;
    }
 
    .button1 {
      border-radius: 12px;
    }
    .button1:hover {
      background-color:#4caf50;
      color: white;
    }
 
    .bg-img {
 
      /* The image used */
      background-image: url("tn.jfif");
      min-height: 380px;
 
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
       /* Full height */
      height: 100%;
    }
 
    /* Add styles to the form container */
    .container {
        position: absolute;
        right: 400px;
        margin: 20px;
        max-width: 650px;
        padding: 16px;
        background-color: white;
        top: 74px;
    }
 
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
     
    /* Set a style for the submit button */
    .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
 
    .btn:hover {
      opacity: 1;
    }
 
    .top-left {
        position: absolute;
        top: 10px;
        left: 570px;
        width: 397px;
        height: 47px;
    }
    a {
        text-decoration:none;
    }
  </style>
</head>
     
<body>
   <div class="bg-img">
   <div class="top-left"> <h1>Complaint Box </h1> </div>
     <form action="?" class="container" method="post">
       <h1>Login</h1>
       
 
<p>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username"
           name="q1" id="q1" required>
 
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password"
          name="q2"  id="q2" required>
 
         
 
<p>
          <button type="submit" class="btn" name="b1" id="b1">
          Login</button>
        </p>
 
 
 
        <center>
          Not registered?
          <b><a href="register.php"> Register Now!</a></b>
  </center></form>
    </div>
</form>   
</body>
</html>