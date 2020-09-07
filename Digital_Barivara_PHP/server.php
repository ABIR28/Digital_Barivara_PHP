<?php
  $email="";
  $phone="";
  $errors=array();
//connecting to database
 $db = mysqli_connect('localhost','root','','registration');
 
 if (isset($_POST['submit'])){
     $email = mysqli_real_escape_string($db,$_POST['email']);
     $phone = mysqli_real_escape_string($db,$_POST['phone']);
     $password1 = mysqli_real_escape_string($db,$_POST['password1']);
     $password2 = mysqli_real_escape_string($db,$_POST['password2']);
     
     if(empty($email)){
         array_push($errors,"Email require!");
     }
     if(empty($phone)){
         array_push($errors,"Phone require!");
     }
     if(empty($password1)){
         array_push($errors,"Password require!");
     }
     if($password1 != $password2){
         array_push($errors,"Please fill correct password!");
     }
     if(count($errors) == 0){
         $password = md5($password1);
         $sql = "INSERT INTO users (email, phone, password) VALUES('$email','$phone','$password')";
         mysqli_query($db,$sql);
         $_SESSION['email'] = $email;
         $_SESSION['success'] = "YOU ARE LOOGED IN";
         header('location:rent.php');//rent page redirection
         
     }
     
 }
     if (isset($_POST['login'])){
      $email = mysqli_real_escape_string($db,$_POST['email']);
     $password= mysqli_real_escape_string($db,$_POST['password']);
     if(empty($email)){
         array_push($errors,"Email require!");
     }
     if(empty($password)){
         array_push($errors,"Password require!");
     }
     if(count($errors)== 0){
         $password = md5 ($password);
         $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
         $result = mysqli_query($db ,$query);
         if(mysqli_num_rows($result) == 1){
         $_SESSION['email'] = $email;
         $_SESSION['success'] = "YOU ARE LOOGED IN";
         header('location:login.php'); 
         }
         else{
             array_push($errors,"The email/Password is wrong");
             
         }
     }
    
 }

  if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['email']);
      header('location:login.php');
  }
?>