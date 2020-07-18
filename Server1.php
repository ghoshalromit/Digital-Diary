<?php
session_start();
$username = "";
$email = "";
$password="";
$dbname="";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'diary');
if(isset($_POST['register'])){
     $username=($_POST['username']);
     $email=($_POST['email']);
     $password=md5($_POST['password']);
 
   if (empty($username)){
        array_push($errors, "Username is required");
    }
   if (empty($email)){
            array_push($errors, "Email is required");
   }    
   if (empty($password)){
                array_push($errors, "Password is required");
   }
   if (count($errors)==0){ 
        $password = md5($password);
        $sql = "INSERT INTO user (username, email, password) 
                   VALUES ('$username', '$email', '$password')";
    
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now login";
        header('location:index1.php');
   }

}

if (isset($_POST['login']))
     {
     $username=($_POST['username']);
     $password=md5($_POST['password']);


   if (empty($username)){
        array_push($errors, "Username is required*");
    }
   if (empty($password)){
            array_push($errors, "Password is required*");
   }  
   if (count($errors)==0) {
        $password=md5($password);
        $query = "SELECT * FROM user WHERE username='$username'AND password='$password' ";
        $result = mysqli_query($db,$query);
        if (mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        $_SESSION['password']=$password;
        $_SESSION['success'] = "You are now login";
        header('location:Diaryhomepage.php');

   }else{
        array_push($errors,"The username or password is invalid");
        header('location:login.php');
   } 
  }
     
}  
if (isset($_GET['logout'])){
     session_destroy();
     unset($_SESSION["username"]);
     header('location:login.php');
}
?>
