<?php
$firstname="";
$lastname="";
$country="";
$subject="";

$db1 = mysqli_connect('localhost','root','','diary1');
if(isset($_POST['submit'])){
$firstname = ($_POST['firstname']);
$lastname = ($_POST['lastname']);
$country = ($_POST['country']);
$subject = ($_POST['subject']);

$sql1 = " INSERT INTO user1 (firstname,lastname,country,subject)
                       VALUES ('$firstname','$lastname','$country','$subject') ";
                        mysqli_query($db1,$sql1);
                        header('location : Diary.html');
}
if(isset($_POST['Logout'])){
header("location:Diary.html");
}
if(isset($_POST['Edit'])){
header("location:contactdisplay.php");
}
?>