<?php
$date="";
$textarea="";

$db1 = mysqli_connect('localhost','root','','comment');
if(isset($_POST['submit'])){
    $date=($_POST['date']);
    $textarea=($_POST['textarea']);
    

$sql1 = "INSERT INTO red (date,textarea)
                    VALUES (NOW(),'$textarea')";
                    mysqli_query($db1,$sql1);
                    header('location:Diaryhomepage.php');
}
if(isset($_POST['Logout'])){
header("location:Diary.html");
}
if(isset($_POST['Edit'])){
header("location:display.php");
}
?>