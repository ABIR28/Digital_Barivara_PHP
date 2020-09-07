<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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
                       <li class="home_1"><a href="index.php">Home</a></li>
                       <li><a href="./contact.php">Contact</a></li>
                       <li><a href="">Rent</a></li>
                       <li><a href="./login.php">Sign In</a></li>
                       <li><a href="./registration.php">Sign Up</a></li>
                   </ul>
               </div>
           </div>
       </div>
    <div class="content">
        <div class="content_wrapper">
           <h1>Register:</h1>
            <form action="registration.php" method="post">
                     <?php
                      include('errors.php');
                     ?>
                      Email:<br>
                       <input type="text" name="email" value="<?php echo $email ?>">
                      <br>Phone:<br>
                       <input type="text" name="phone" value="<?php echo $phone ?>">
                      <br>Password:<br>
                       <input type="password" name="password1">
                      <br>Confirm Password:<br>
                       <input type="password" name="password2">
                       <input type="submit" name="submit">
                       <p>Already member?</p>
                       <a href="login.php">Login</a>
                       
            </form>
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