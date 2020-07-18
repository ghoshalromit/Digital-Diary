<?php include('contactserver.php'); 
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.logo{
height: 73.5px;
width: auto;
float: left;
margin-top: 0px;
}
.topnav{
overflow: hidden;
background-color: #FFD700;
}
.topnav a{
float: left;
display: block;
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
background-color: #FF8C00;
color: white;
}


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
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #008080;
  padding: 20px;
}
</style>
</head>
<body>
<div class="topnav">
<img src="Diary3.png" class="logo">


<a class="active" href="#contact">CONTACT</a>
<a href="Diary.html">MAIN MENU</a>
<a href="about.html">ABOUT</a>
</div><br>

<h3>Contact Form</h3>
<form action="Contact.php" method="POST" >

<div class="container">
 
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="India">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Your Contact Number and other Details</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="submit">

<button type="submit" name="Edit" value="submit" class="btn">Edit</button>
<button type="submit" name="Logout" value="submit" class="btn1">Logout</button>
  </form>
</div>

</body>
</html>
