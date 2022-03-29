
<!--Older Code-->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!--Link to CSS, BootStrap and JS File below-->
    <!-- Latest compiled and minified CSS boottsrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- For fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!--Introduced my CSS Files here
    <link rel="stylesheet" href="StoryTeller.css" tyepe="text/css">
    -->

    <!-- Latest compiled JavaScript compatible with bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body> 
  <header>
    <!--Navigation Links-->
    <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">    
                    <a href="StoryTellerWebAppIndex.php"> 
                        <img src="http://localhost:8888/007Cswk/Images/TourScot_Logo.png" width="150" height="100" alt="TourScot Logo"></a>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="StoryTellerWebAppIndex.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="About.html">About us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Contact.html">Contact us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Covid19Advisory.html">Covid 19 Travel Advisory</a>
                      </li>
                      <li class="nav-item">
                            <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search"/>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                      </li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>  

<!--HEADER ENDS & MAIN STARTS HERE-->
   
      <main>
        <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <h4 class="text-center text-dark mt-5">New user?</h4>
                <div class="text-center mb-5 text-dark">Fill in below details to register</div>
                <div class="card my-5">
                  <form class="card-body cardbody-color p-lg-5" method="post" action="login.php">
				             <?php  include('errors.php'); ?>
                    <div class="text-center">
                        <img src="http://localhost:8888/007Cswk/Images/profile.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                          width="100px" alt="profile">
                      </div>
                      <!--php error check-->
                            <?php include('errors.php'); ?>
                            <div class="form-outline mb-4">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" >
                            </div>
                            <div class="form-outline mb-4">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-outline mb-4">
                                <button type="submit" class="btn" name="login_user" class="form-control">Login</button>
                            </div>
                            <p>
                                Not yet a member? <a href="register.php">Sign up</a>
                            </p>
                        </form>
					
                  </form>
                </div>
        
              </div>
            </div>
          </div>
    </main>
        
    <!--MAIN ENDS HERE & FOOTER STARTS HERE-->
    <!-- Facebook -->
    <footer class="bg-light text-center"> 
      <div class="footer">
          <div class="row col-lg-12">
              <div class="col-lg-2">
                 <h4> 
                      <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                     <a href="https://twitter.com/home" class="fa fa-twitter"></a>
                     <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                 </h4>
              </div>
              <div class="col-lg-2"><a href="sitemap.html" class="text-decoration-none text-primary">Sitemap</a></div>
              <div class="col-lg-2"><a href="FAQ.html" class="text-decoration-none text-primary">FAQs</a></div>
              <div class="col-lg-2"><a href="Privacy.html" class="text-decoration-none text-primary">Privacy Statement</a></div>
              <div class="col-lg-2"><a href="Cookies.html" class="text-decoration-none text-primary">Cookies Statement</a></div>
              <div class="col-lg-2"><a href="Terms.html" class="text-decoration-none text-primary">Terms and Conditions</a></div>
            </div>
          <div class="text-center p-3">
              <a href="Copyright.html" class="text-decoration-none text-success">Copyright © 2022 This site is maintained by TourScot</a><br
            </div>
      </div>
          
  </footer>
</body>
</html>


