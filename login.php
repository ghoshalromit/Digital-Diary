<?php include('Server1.php'); 
?>
<html>
<head>
<meta name = "viewport" content="width=device-width,initial-scale = 1.0 ">
<link rel="stylesheet" type="text/css" href="loginstyles.css">
<title>Login Page</title>
</head>
<body>
<div class="home">
<a href="Diary.html">BACK TO HOME</a>
</div>
<div class="center">
<style="background-color :#20B2AA">
<form method="post" action="login.php">
<?php include('errors.php');?>
<h1 id="heading1">Login</h1>
&nbsp;&nbsp;&nbsp;&nbsp;Username<br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter your name" name="username" ><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Password<br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Enter your password" name="password"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<button type="register" name="login" class="loginbtn">Login</button><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Not yet a member?<a href="Registration.php">Sign up</a></p>
</form>
</div>
</body>
</html>