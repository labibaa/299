<!DOCTYPE html>
<?php 
  session_start();
  if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
     
      <span class="logo_name">NSU Complain Box</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            
            <span class="links_name">Dashboard</span>
          </a>
        </li>
       
        <li>
          <a href="comphis.php">
            
            <span class="links_name">Complain History</span>
          </a>
        </li>
        <li>
          <a href="registercomplaint.php">
            
            <span class="links_name">Make Complain (University)</span>
          </a>
        </li>
        <li>
          <a href="complaintagainst.php">
            
            <span class="links_name">Make Complain (Person)</span>
          </a>
        </li>
        <li>
          <a href="cart.php">
            
            <span class="links_name">Cart</span>
          </a>
        </li>
        <li>
          <a href="login-chat.php">
            
            <span class="links_name">Chat App</span>
          </a>
        </li>
        <li class="log_out">
          <a href="?logout">
            
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
     
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Unreviewed Complains</div>
            <div class="number"> 
            
        </div>
            <div class="indicator">
            </div>
          </div>
    
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Reviewed Complains</div>
            <div class="number">
              <?php
              include_once 'connect.php';
         $sql="SELECT count(feedback) AS feedback FROM feedback WHERE feedback IS NOT NULL ";
         $result=mysqli_query($conn,$sql);
         $values=mysqli_fetch_assoc($result);
        $num_rows=$values['feedback'];
        echo $num_rows;
        ?>
        </div>
            <div class="indicator">
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total users </div>
            <div class="number">
              <?php
              include_once 'connect.php';
         $sql="SELECT count(uid) AS total FROM register";
         $result=mysqli_query($conn,$sql);
         $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo $num_rows;
        ?></div>
            <div class="indicator">
                          </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">In case anything is troubling you don't forget to drop a complain in our box!</div>
            
            <div class="indicator">
                          </div>
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Complains</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">23 Jan 2021</a></li>
              <li><a href="#">15 May 2021</a></li>
             
            </ul>
            <ul class="details">
            <li class="topic">Complain</li>
            <li><a href="#">Broken projector slide at SAC024</a></li>
            <li><a href="#">Stalking Threat</a></li>
            <li><a href="#">AC not working at NAC524</a></li>
        
            
          </ul>
          <ul class="details">
            <li class="topic">Status</li>
            <li><a href="#">Reviewed</a></li>
            <li><a href="#">Reviewed</a></li>
            <li><a href="#">Pending</a></li>
            
          </ul>
          </div>
          <div class="button">
            <a href="user-seeall.php">See All</a>
          </div>
        </div>
        
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

