<?php include('Server1.php');
?>
<html>
<head>
<meta name = "viewport" content="width=device-width,initial-scale = 1.0 ">
<link rel="stylesheet" type="text/css" href="registerstyles.css">
<title>Register page</title>
</head>
<body>
<div class="center">
<form method="post" action="Registration.php">
<?php include("errors.php");?>
        <h1 id="heading1">Register Now</h1>
        &nbsp;&nbsp;Username<br>&nbsp;&nbsp;<input type="text" placeholder="Enter your name" name="username" ><br>
        &nbsp;&nbsp;Email<br>&nbsp;&nbsp;<input type="text" placeholder="Enter your email" name="email"><br>
        &nbsp;&nbsp;Password<br>&nbsp;&nbsp;<input type="password" placeholder="Enter your password" name="password"><br>
        &nbsp;&nbsp;<button type="register" name="register" class="registerbtn">Register</button><br>
        <p>&nbsp;&nbsp;Already a member?<a href="login.php">Sign in</a></p>
</form>
</div>
</body>
</html>
