<!--php code to connect to local server -->
<?php
  
  include_once 'connect.php';
  
// SQL query to select data from database
$sql = "SELECT * FROM complaint_against_university ORDER BY s_no ASC  ";
$result = $conn->query($sql);
$conn->close(); 
?>
<!-- HTML code to display data in tabular format-->
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>NSU All Complains Against University</title>
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
  
        td {
            font-weight: lighter;
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
    </style>
</head>
  
<body>
    <section>
        <h1>NSU Complaint Box Against University</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
            <th> Serial No.</th>
                <th> Unique Complain ID</th>
                <th>Category</th>
                <th>Complaint</th>
                <th>Date of Complain</th>
              
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['s_no'];?></td>
                <td><?php echo $rows['qid2'];?></td>
                <td><?php echo $rows['category'];?></td>
                <td><?php echo $rows['complaint'];?></td>
                <td><?php echo $rows['reg_datetime'];?></td>
                
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
    <br>
         <center>   <a href="user-seeallp.php" class="button1">See complaints against person</a></center> <br>
         <center> <a href="dashboard.php" class="button1">Go back to dashboard</a></center>
          
</body>
  
</html>