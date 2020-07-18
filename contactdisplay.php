
<html>
<head>
<title>Search Data</title>
<style>

.topnav {
  overflow: hidden;
  background-color: #333;
}
.logo{
height: 48px;
width: auto;
float: left;
margin-top: 0px;
}

.topnav a {
  float: left;
  color: #A52A2A;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
#textarea{
height:400px;
width : 800px;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
body{
background-color :#F0E68C;
 margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
input[type="textarea"]{
padding-top : 0px;
}
#btn{
width: 10%;
height : 5%;
font-size: 22px;
padding: 0px;
}
.btn1{
width: 10%;
height : 5%;
font-size: 22px;
padding: 0px;
}

input{
width : 40%;
height : 5%;
border : 1px;
border - radius : 5px;
padding: 8px 15px 8px 15px;
margin: 10px 0px 15px 0px;
box-shadow: 1px 1px 2px 1px grey;
}
</style>
</head>
<body>
<header>
<img src="Diary3.png" class="logo">
<div class="topnav">
  <a class="active" href="Diaryhomepage.php">Home</a>
  <a href="Contact.php">Contact</a>
  <div class="topnav-right">
    <a href="About.html">About</a>
    <a href="Diary.html">Logout</a>
  </div>
</div>

<div style="padding-left:16px">
</div>
<center>
<h1><i><u>Want to Update Your Contact Informations?</u></i></h1>
<h2>Give the desired name and Click on Search </h2>
<div class="container">
<form action ="" method="POST" style="background-color :#D2691E">
<input type = "text" name="firstname" id="btn" placeholder="Enter firstname">
<input type = "text" name="lastname" id="btn" placeholder="Enter lastname">
<input type="submit" name="search" class="btn1" value= "Search">
</form>
<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'diary1');
if(isset($_POST['search']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$query= "SELECT * FROM user1 where firstname='$firstname' and lastname='$lastname' ";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($query_run))
{
?>
<form action ="" method="POST" style="background-color :#B8860B">
<input type = "text" name="firstname" id="btn" placeholder="Enter firstname" value="<?php echo $row['firstname'] ?>"/><br>
<input type = "text" name="lastname" id="btn" placeholder="Enter lastname" value="<?php echo $row['lastname'] ?>"/><br>
<input type = "text" name="country" id="btn" placeholder="Enter country" value="<?php echo $row['country'] ?>"/><br>
<input type="textarea" name="subject" id="textarea" placeholder="Start typing..." style="height:200px" value="<?php echo $row['subject'] ?>"/><br>
<input type="submit" name="update" class="btn1" value="Update Data"/>
</form>
</header>
<?php
}
}
?>
</center>
</body>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'diary1');

if(isset($_POST['update']))
{
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$country= $_POST['country'];
$textarea = $_POST['subject'];
$query = "UPDATE user1 SET firstname='$_POST[firstname]',lastname='$_POST[lastname]', subject='$_POST[subject]' where firstname='$_POST[firstname]' and  lastname='$_POST[lastname]' ";
$query_run = mysqli_query($connection,$query);
if($query_run)
{
echo '<script> alert("Data Updated Successfully") </script>';
}
else
{
echo '<script> alert("Data Not Updated ") </script>';
}
}
?>
<html>
<body>
<center>
<button onclick="goBack()">Go Back to Previous Page</button>

<p>Notice that clicking on the Back button,you will be redirected to the previous page</p>

<script>
function goBack() {
    window.history.back("Diary.html");
}
</script>
</center>
</body>
</html>