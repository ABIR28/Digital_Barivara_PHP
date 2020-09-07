<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In </title>
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <div class="header">
           <div class="header_left">
               <div class="logo">
                   
               </div>
           </div>
           <div class="header_right">
               <div class="menu_bar">
                   <ul class=list>
                       <li class="home_1"><a href="./index.php">Home</a></li>
                       <li><a href="./contact.php">Contact</a></li>
                       <li><a href="./rent.php">Rent</a></li>
                       <li><a href="./login.php">Sign In</a></li>
                       <li><a href="./registration.php">Sign Up</a></li>
                   </ul>
               </div>
           </div>
       </div>
    <div class="content">
        <div class="content_wrapper">
            <h1>login:</h1>
            <form action="rent.php" method="post" onsubmit="return validation()">
                     <?php
                      include('errors.php');
                     ?>
                      Email:<br>
                       <input type="text" name="email" value="">
                       <span id="messege"></span>
                      <br>Password:<br>
                       <input type="text" name="password" value="">
                       <input type="submit" name="login">
                       <p>Not yet a member?</p>
                       <a href="registration.php">Register</a>
                       
            </form>
            <p>1.Both field should not be blank <br>
            2.email must contain @.gmail.
            </p>
            <script type="text/javascript">
             var email= document.login.email.value;
             var password= document.login.password.value;
                if(email == "" || password == ""){
                    alert(please fillup the blank pages)
                  if(email.indexOf('@')<=0){
                      document.getElementById("messege").innerHTML="**invalid**";
                      return false;
                  }  
                }
            </script>
        </div>
    </div>
    <div class="footer">
           <div class="footer">
               <div class="footer_left">
                   <p class="f_tile">ADDRESS</p>
                   <p>House: ka-194/1<br>Word no: 17<br>Kuril Chourasta (member bari)</p>
               </div>
               <div class="footer_middle">
                   <p class="f_tile">Follow US</p>
                   <img src="images/f.png">
               </div>
               <div class="footer_right">
                   <p class="f_tile">Intro</p>
                   <p>HomeFinderBD is the marketplace for connecting property buyers and sellers/tenant and owner. List down your property or start with a search for your dream home</p>
               </div>
           </div>
       </div>
    
    
    
    
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>