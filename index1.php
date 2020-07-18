<?php include('Server1.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index1style.css">
<title>Home Page</title>
</head>
<body>
  <div class="header">
    <h2>Home Page</h2>
    </div>
   <div class="content">
     <?php if (isset($_SESSION['success'])): ?>
       <div class="error success"> 
         <h3> 
           <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
           ?>
         </h3> 
       </div>
     <?php endif ?>
     <?php if (isset($_SESSION["username"])): ?>
       <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
       <p><a href="index1.php?logout='1' " style="color:red;">Logout</a></p>&nbsp;<p><a href="login.php?login='1' " style="color:red;">Click here to Login.</a></p>

       
     <?php endif ?>  
   </div>    
    </body>
    </html> 
