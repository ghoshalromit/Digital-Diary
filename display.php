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
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
body{
background-color :#B0C4DE;
 margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
input[type="textarea"]{
padding-top : 0px;
}
.btn{
width: 10%;
height : 5%;
font-size: 22px;
padding: 0px;
}
#textarea{
height:400px;
width : 800px;
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
<h1><i><u>Want to Update Your Memories?</u></i></h1>
<h2>Give a date and Click on Search to relive the memories of that day </h2>
<div class="container">
<form action ="" method="POST" style="background-color :#20B2AA">
<input type = "date" name="date" class="btn" placeholder="Enter date">
<input type="submit" name="search" class="btn" value= "Search By Date">
</form>
<?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'comment');
if(isset($_POST['search']))
{
$date = $_POST['date'];
$query= "SELECT * FROM red where date='$date' ";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($query_run))
{
?>
<form action ="" method="POST" style="background-color :lightgreen">
<input type = "date" name="date" class="btn" placeholder="Enter date" value="<?php echo $row['date'] ?>"/><br>
<input type = "textarea" name="textarea" id="textarea" colspan="185" placeholder="Enter Your Memory" value="<?php echo $row['textarea'] ?>"/><br>
<input type="submit" name="update" class="btn" value="Update Data"/>
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
$db = mysqli_select_db($connection,'comment');

if(isset($_POST['update']))
{
$date= $_POST['date'];
$textarea = $_POST['textarea'];
$query = "UPDATE red SET date='$_POST[date]', textarea='$_POST[textarea]' where date='$_POST[date]' ";
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