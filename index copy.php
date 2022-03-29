
   
<?php 
  session_start();

  if (isset($_SESSION['username']) && isset($_SESSION['username'])) { 
?>

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
    <!--Introduced my CSS Files here-->
    <link rel="stylesheet" href="file:///Applications/MAMP/htdocs/007Cswk/StoryTeller.css" tyepe="text/css">



    <!-- Latest compiled JavaScript compatible with bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body> 
  <header>
    <!--Navigation Links-->
        <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">    
                    <a href="file:///Applications/MAMP/htdocs/007Cswk/StoryTeller_Web_App_Index.html"> 
                        <img src="http://localhost:8888/007Cswk/Images/TourScot_Logo.png" width="150" height="100" alt="TourScot Logo"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="file:///Applications/MAMP/htdocs/007Cswk/StoryTeller_Web_App_Index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="file:///Applications/MAMP/htdocs/007Cswk/About.html">About us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="file:///Applications/MAMP/htdocs/007Cswk/Contact.html">Contact us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="file:///Applications/MAMP/htdocs/007Cswk/Covid19Advisory.html">Covid 19 Travel Advisory</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="file:///Applications/MAMP/htdocs/007Cswk/Login.html">Login</a>
                      </li>
                    </ul>
                  
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </section>
    </header>  

<!--HEADER ENDS & MAIN STARTS HERE-->
    <main>
      <main>
        <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <h4 class="text-center text-dark mt-5">Existing user?</h4>
                <div class="text-center mb-5 text-dark">Fill in below details to login</div>
                <div class="card my-5">
                    <!--Php code embedded starts here-->
                        <form class="card-body cardbody-color p-lg-5" 
                        action = "authenticate.php" method = "POST">
                       <!-- before php here action="login.php" method="post"-->
                          
                          <!--Php code embedded ends here-->
                            <div class="text-center">
                                <img src="http://localhost:8888/007Cswk/Images/profile.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                                  width="100px" alt="profile">
                              </div>
                            <div class="mb-3">
                              <input type="text" class="form-control" id="username"required 
                                placeholder="username"> 
                            </div>

                            <div class="mb-3">
                              <input type="password" class="form-control" id="password"required placeholder="password">
                            </div>
 
                            <div class="text-center"><button type="submit" class="btn btn-primary">Login</button></div>
                            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
                              Registered? <a href="file:///Applications/MAMP/htdocs/007Cswk/register.html" class="text-dark fw-bold"> Create an
                                Account</a>
                            </div>
                    </form>
                    <!--Php code embedded starts here-->
                    
                    <!--Php code embedded ends here-->
                </div>
        
              </div>
            </div>
          </div>
    </main>


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
              <div class="col-lg-2"><a href="file:///Applications/MAMP/htdocs/007Cswk/sitemap.html" class="text-decoration-none text-primary">Sitemap</a></div>
              <div class="col-lg-2"><a href="file:///Applications/MAMP/htdocs/007Cswk/FAQ.html" class="text-decoration-none text-primary">FAQs</a></div>
              <div class="col-lg-2"><a href="file:///Applications/MAMP/htdocs/007Cswk/Privacy.html" class="text-decoration-none text-primary">Privacy Statement</a></div>
              <div class="col-lg-2"><a href="file:///Applications/MAMP/htdocs/007Cswk/Cookies.html" class="text-decoration-none text-primary">Cookies Statement</a></div>
              <div class="col-lg-2"><a href="file:///Applications/MAMP/htdocs/007Cswk/Terms.html" class="text-decoration-none text-primary">Terms and Conditions</a></div>
            </div>
          <div class="text-center p-3">
              <a href="file:///Applications/MAMP/htdocs/007Cswk/Copyright.html" class="text-decoration-none text-success">Copyright © 2022 This site is maintained by TourScot</a><br
            </div>
      </div>
          
  </footer>
</body>
</html>


<?php 
}else {
   header("Location: login.php");
}
 ?>
