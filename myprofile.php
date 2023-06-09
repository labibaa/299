<!--php code to connect to local server -->
<?php
  
// Username is root
$user = 'root';
$password = ''; 
  
$database = 'complaint_info'; 
  
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM complaint_against_university ORDER BY s_no ASC ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!-- HTML code to display data in tabular format-->
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
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
@media all and (max-width:30em){
    a.button1{
        display:block;
        margin:0.4em auto;
    }
}
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>My Profile</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Name </th>
                <th>Parent's Name </th>
                <th>Age</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Section</th>
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['parent_name'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['section'];?></td>
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
    <br>
    <center><a href="dashboard.php" class="button1">Go Back</a></center>

</body>
  
</html>