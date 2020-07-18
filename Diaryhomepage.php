<?php include('connection.php')
?>
<html>
<head>
<meta name = "viewport" content="width=device-width,initial-scale = 1.0 ">
<style>
*{box-sizing: border-box;}

.logo{
height: 73.5px;
width: auto;
float: left;
margin-top: 0px;
}
.btn1{
width: 100px;
margin-left : 500px;
margin-top : 0px;
background-color : red;
}
.btn{
width: 100px;
margin-left : 5px;
margin-top : 0px;
background-color : green;
}
body {
margin: 0;
}
header{
background-image: url("Diaryimage1.jpeg");
background-size: cover;
background-repeat: no repeat;
height: 100vh;
width: 100vw;
}
#heading1{
   text-align: center;
}
.topnav{
overflow: hidden;
background-color: #e9e9e9;
}
.topnav a{
float: left;
display: bock;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
.topnav a:hover{
background-color: #ddd;
color: black;
}
.topnav a.active{
background-color: #2196F3;
color: white;
}
.topnav .search-container{
float: right;
}
.topnav input[type=text]{
padding: 6px;
margin-top: 8px;
font-size: 17px;
border: none;
}
.topnav .search-container button{
float: right;
padding: 6px 10px;
margin-top: 8px;
margin-right: 16px;
background: #ddd;
font-size: 17px;
border: none;
cursor: pointer;
}
#textarea{
height:400px;
}
.topnav .search-container button:hover {
background: #ccc;
}
@media screen and (max-width:600px){
.topnav .search-container {
float: none;
}
.topnav a, .topnav input[type=text],
.topnav .search-container button {
float: none;
display: block;
text-align: center;
width: 100%;
margin: 0;
padding: 14px;
}
.topnav input[type=text]{
border: 1px solid #ccc;
}
}
</style>
</head>

<body>
<header>
<img src="Diary3.png" class="logo">

<div class="topnav">

<a class="active" href="#Home">HOME</a>
<a href="Diary.html">MAIN MENU</a>
<a href="About.html">ABOUT</a>
<a href="Contact.php">CONTACT</a>

<br>
<div class="search-container">
<form>
<input type="text" placeholder"Search..." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</div>


<h1 id="heading1"><u>GIVE TODAY'S ENTRY</u></h1>
<form method="POST" action="Diaryhomepage.php">
<details>
<summary><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MY ENTRIES:</b><summary>
</details><br>
<?php
$s1=time();
$date=Date("m-d-Y",$s1);
echo"&nbsp;&nbsp;&nbsp;<b><font size=5>Today's date :$date</font></b><br>";
?>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;<textarea id="textarea" name="textarea" cols="185" placeholder="Start typing..."></textarea><br>
</p>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit"><br><br>
<button type="submit" name="Edit" value="submit" class="btn">Edit</button>
<button type="submit" name="Logout" value="submit" class="btn1">Logout</button>
</form>
</header>




</body>
</html>



