<?php
include_once 'connect.php';
if(isset($_POST['b1']))
{    
     $qid2 = $_POST['qid2'];
     $feedback = $_POST['feedback'];

     $sql = "INSERT INTO feedback (qid2,feedback)
     VALUES ('$qid2','$feedback')";
     if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Feedback has been added successfully !');</script>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feedback from Admin</title> 
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	width: 50%;
	margin:0 auto;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.registerbtn {
                display:inline-block;
                padding:0.35em 1.2em;
                border:0.1em solid #000;
                margin:0 0.3em 0.3em 0;
                border-radius:0.12em;
                box-sizing: border-box;
                text-decoration:none;
                font-family:'Roboto',sans-serif;
                font-weight:300;
                color: #000;;
                text-align:center;
                transition: all 0.2s;
      }
 
      .registerbtn:hover {
        color: #fff;;
    background-color: #000000;
      }
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
a.button1{
                display:inline-block;
                padding:0.35em 1.2em;
                border:0.1em solid #000;
                margin:0 0.3em 0.3em 0;
                border-radius:0.12em;
                box-sizing: border-box;
                text-decoration:none;
                font-family:'Roboto',sans-serif;
                font-weight:300;
                color: #000;;
                text-align:center;
                transition: all 0.2s;
            }
            
            a.button1:hover{
    color: #fff;;
    background-color: #000000;
            }
</style>
</head>
<body>
<align-center>
<h1>Feedback Form</h1>

<div class="container">
  <form action="?" method="post" >
    <label for="qid2"><h2>Enter Unique ID</h2></label>
    <input type="text" id="qid2" name="qid2" placeholder="Enter complaint id.." >

	<label for="feedback"><h2>Feedback</h2></label>
    <textarea id="feedback" name="feedback" placeholder="Enter feedback.." style="height:200px"></textarea>
    
    <center><button type="submit" class="registerbtn" name="b1" id="b1">Submit</button></center>
  </form> <br>
  <center> <a href="seeall.php" class="button1">Go Back</a></center><br>
</div>
</align-center>
</body>
</html>