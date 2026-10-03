<?php 
session_start();
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$user="admin@gmail.com";
$psd = "admin123";
//check passoword is correct 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($email ==$user  && $password == $psd ){
        $_SESSION['key']="yes";
         $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
         header("Location: profile.php");
        exit();
    }else {
       header("Location: index.php");
       exit();  
    }
}

?>













?>