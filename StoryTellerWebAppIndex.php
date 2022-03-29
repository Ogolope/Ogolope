<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourScot Homepage</title>
    <!--Link to CSS, BootStrap and JS File below-->
    <!-- Latest compiled and minified CSS boottsrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to Font-awesome Framework -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!--Introduced my CSS Files 
    <link rel="stylesheet" href="StoryTeller.css" tyepe="text/css">here-->

    <!-- Latest compiled JavaScript compatible with bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    


</head>

<body> 
    <!--Setting Cookies-->
        <?php
        setcookie('tourism', 'story', time() + 86400); //cookie to last for just a day
        ?>
  <header>
    <!--Navigation Links, the logo is also embedded with the homepage link too-->
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

<!--HEADER ENDS & MAIN TAG FOR THE BODY STARTS HERE-->
    <main>
       <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                        <div class="col justify-content-center">
                            <a href="TourScot.html" class="text-decoration-none text-danger">TourScot</a>
                        </div>
                        <div class="col justify-content-center">
                            <a href="Explore.html" class="text-decoration-none text-warning">Explore Scotland</a>
                        </div>
                        <div class="col justify-content-center class=text-decoration-none">
                            <a href="Upcoming.html" class="text-decoration-none text-link">Upcoming Events</a>
                        </div>
                </div>
            </nav>
        </section>
       
        <section>
            <!--Dropdown to search by category-->

          <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Story by Category
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Category.html">Art</a></li>
                <li><a class="dropdown-item" href="Category.html">Architecture</a></li>
                <li><a class="dropdown-item" href="Category.html">Museum</a></li>
                </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Story by Location
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Location.html">Aberdeen</a></li>
                <li><a class="dropdown-item" href="Location.html">Edinburgh</a></li>
                <li><a class="dropdown-item" href="Location.html">Glasgow</a></li>
                </ul>
            </div>


            <!-- Carousel/Image Slide Show -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
    
            <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                     <div class="carousel-item active">
                    <img src="http://localhost:8888/007Cswk/Images/carlton hill.jpeg" alt="Carlton Hill" class="d-block" style="width:100%">
            
                    <div class="carousel-caption d-none d-md-block">
                    <h3>Calton Hill</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quidem, architecto quos blanditiis vitae eveniet laboriosam, harum accusantium sit pariatur rerum odit fugiat consequuntur ipsa? Fuga voluptate aspernatur ipsum at <a href="Explore.html" class="text-danger">more details</a></p>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img src="http://localhost:8888/007Cswk/Images/ocean side.jpeg" alt="Ocean side" class="d-block" style="width:100%">
            
                    <div class="carousel-caption d-none d-md-block">
                    <h3>Ocean side</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quidem, architecto quos blanditiis vitae eveniet laboriosam, harum accusantium sit pariatur rerum odit fugiat consequuntur ipsa? Fuga voluptate aspernatur ipsum at <a href="Explore.html" class="text-danger">more details</a> </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="http://localhost:8888/007Cswk/Images/light house.jpeg" alt="Light house" class="d-block"style="width:100%">
            
                    <div class="carousel-caption d-none d-md-block">
                    <h3>Light house</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quidem, architecto quos blanditiis vitae eveniet laboriosam, harum accusantium sit pariatur rerum odit fugiat consequuntur ipsa? Fuga voluptate aspernatur ipsum at <a href="Explore.html" class="text-danger">more details</a></p>
                    </div>
                </div>
            </div>

    <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
    </div>
    </section>

        <!--Side attractions-->         
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                    <div class="col justify-content-center">
                        <h5><a href="Discussion.html" class="text-warning">Discussion Forum</a></h5>
                        <img src="http://localhost:8888/007Cswk/Images/Discussion .jpeg" width="250" height="170"  alt="Discussion Forum" id="discussionimage">
                        <h6>Lorem ipsum dolor sit amet</h6>
                    </div>
                    <div class="col justify-content-center">
                        <h5><a href="Planner.html" class="text-info">Trip Planner</a></h5>
                        <img src="http://localhost:8888/007Cswk/Images/Trip Planner.png" width="250" height="170"  alt="Trip Planner" id="tripplannerimage">
                        <h6>Lorem ipsum dolor sit amet</h6>
                    </div>
                    <div class="col justify-content-center class=text-decoration-none">
                        <h5><a href="Partner.html" class="text-success">Our Partners</a></h5>
                        <img src="http://localhost:8888/007Cswk/Images/Our partners.jpeg" width="250" height="170"  alt="Our Partners" id="ourpartnerimage">
                        <h6>Lorem ipsum dolor sit amet</h6>
                    </div>
            </div>
        </nav>
       
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


 <!-- AWA MELVINE., 2017. Complete user registration system using PHP and MySQL database .[online]. Codewithawa.com. Available from: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database [Accessed 24 March 2022] -->