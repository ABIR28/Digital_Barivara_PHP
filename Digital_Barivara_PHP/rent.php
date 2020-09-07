<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>rent</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
 
   
<section class="header">
       <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/abirlogo.png" alt="" height="80px" width="auto"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav menu ml-auto" style="text-transform: uppercase">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./login.php">LOG OUT</a>
          </li>
        </ul>
      </div>
    </nav>
 
    </div>
 <!--   <div class="mainbanner">
            
        </div> -->
           <div class="content">
      <?php if (isset($_SESSION['success'])): ?>
      <div class="error success">
          <h3>
              <?php 
              echo $_SESSION['success'];
              unset ($_SESSION['success']);
              ?>
          </h3>
      </div>
      <?php endif ?>
      <?php if(isset($_SESSION["email"])): ?>
      <p>WELCOME <strong><?php echo $_SESSION['email']; ?></strong></p>
      <p><a href="login.php">log out</a></p>
      <?php endif ?>
      </div>
</section>
    <!--blog stats here-->
<section id="blog">
    <div class="container">
        <div class="row blog_content">
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">22nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home1.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">3 BED 2 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2two">tanvir</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">24nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home2.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">4 BED 3 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2three">AKASH Zaman</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">1st february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home4.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">4 BED 3 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">ABIR</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">3rd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home3.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">2 BED 1 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">Aladeen</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">2nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home6.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">1 BED 1 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">KHADIZA</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">22nd december</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home4.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">5 bed 4 bath</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">Ali</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog ends here-->
<!--sponsor logo starts here-->
<section id="sponsor_logo">
       <div class="container">
           <div class="row blog_content">
               <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">22nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home1.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">3 BED 2 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2two">tanvir</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">24nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home2.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">4 BED 3 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2three">AKASH Zaman</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">1st february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home4.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">4 BED 3 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">ABIR</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">3rd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home3.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">2 BED 1 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">Aladeen</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">2nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home6.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">1 BED 1 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">KHADIZA</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">22nd december</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home4.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">5 bed 4 bath</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">Ali</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
             
             
              
           </div>
       </div>
   </section>
<!-- sponsor logo ends here--> 
<!--contactus starts here--> 

<section id="sponsor_logo">
       <div class="container">
           <div class="row blog_content">
               <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">22nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home1.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">3 BED 2 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2two">tanvir</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">24nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home2.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">4 BED 3 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2three">AKASH Zaman</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">1st february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home4.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">4 BED 3 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">ABIR</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">3rd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home3.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">2 BED 1 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">Aladeen</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">2nd february</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home6.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">1 BED 1 BATH</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">KHADIZA</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog">
                <h2 class="blog_h2one">22nd december</h2>
<!--************************you can change your image here***********************************-->
                <a href="#"><img src="images/home4.jpg" class="w-100" alt="image"></a>
                <h1 class="blog_h1">5 bed 4 bath</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="paragraph">
                       <h2 class="blog_h2four">Ali</h2>
                </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="paragraph">
                            <h5 class="para1">likes:21 </h5>
                       <h5 class="para2">comments:5</h5>
                        </div>
                    </div>
                </div>
                
                <p class="pera3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seem sequi unam aliquam quaerat voluptatem.</p>
                <button type="button" class="btn">read more</button>
                </div>
            </div>
             
             
              
           </div>
       </div>
   </section>
<!-- contactus ends here-->   
<!-- fotter starts here-->
<section id="footer">
    <div class="row">
       
        <div class="col-lg-2"></div>
            <div class="col-lg-3">
            <div class="f_para">
                <h3>© 2018 ABIR All Rights Reserved.</h3>
            </div>
        </div>
        <div class="col-lg-7">
           <div class="footer_content">
               <ul>
                   <li>
                       <a href="#">Faq's</a>
                       <a href="#">privacy policy</a>
                       <a href="#">tearms of use </a>
                   </li>
               </ul>
           </div>
        </div>
    </div>
</section>
      
<!-- footer ends here-->
        
   
   
   
   
   
   
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>