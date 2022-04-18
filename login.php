<!doctype html>
<html>
<head>
  <title>Miracle Website</title>
  
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
 <link rel='stylesheet' type='text/css' href='onojason.css'> 


  <meta name='viewport' content='width=device-width initial-scale=1 shrink-to-fit=no'>
  
  <meta charset='UTF-8'>
  
  <meta  name='description' content='this is a personal website, i am a software developer per execellent, lets do business'>
  
  <meta name='author' content='Onojason Miracle'>
  
  <meta name='keywords' content='software developers in Lagos, software developers in Nigeria, software developers, best developers for a job'>
  
  <style style='text/css'>
    
      
  </style>
</head>
<body>

  <!--mother div-->
  <div class='container-fluid' style="position: relative;">
      <!--navbar-->
    
      <div class="row"> 
      <div class="col">
      <nav class="navbar navbar-expand-md text-align-center navbar-light  navbar-light fixed-top menu-bg">
      <a class="navbar-brand" href="#"></a>
    <h1 class=" text-light ms-md-5 mt-md-3">Onojason.M</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0   px-0 ms-md-5">
        <li class="nav-item active ">
          <a class="menu-link mt-md-3" aria-current="page" href="#home">Home</a>
        </li>
    
        <li class="nav-item ">
          <a class=" menu-link mt-md-3" href="#aboutme">About Me</a>
        </li>
    
      <li class="nav-item ">
          <a class=" menu-link mt-md-3" href="#skills">Skills</a>
        </li>

          <li class="nav-item ">
          <a class=" menu-link mt-md-3" href="#projects">Project</a>
        </li>
    
    
      <li class="nav-item ">
          <a class=" menu-link mt-md-3" href="#contact">Contact Me</a>
        </li>
       
       <li class="nav-item ">
          <a class=" resume-link mt-md-3 btn btn-outline-light" href="#">Resume</a>
        </li>

        <li>
        <a href="register.php" style="text-decoration: none!important;" class="text-dark nav-link mt-md-3">Register</a>
      </li>
    
      </ul>
     
    </div>
 

</nav>

</div>
</div>



<?php          

if ($_SERVER['REQUEST_METHOD']=='POST') {
  
   // to validate
  $errors = array();

  if (empty($_POST['email'])) {
      $errors['email'] = "Email address field cannot be empty";
    }


    if (empty($_POST['password'])) {
      $errors['password'] = "Password field cannot be empty";
    } 

    if (empty($errors)) {
      // code...
   
  //include your user.php
  include_once("admin.php");


  //create user object
  $obj = new Owner;


  // to access login method

  $message = $obj->login(strip_tags(trim($_POST['email'])), strip_tags(trim($_POST['password'])));
  
 
  if ($message==true) {

//redirect to allclients.php
   header("Location: allclients.php");
   exit;
  }

  else{
    echo "<p class='pbutton alert alert-danger'>Invalid email address or password</p>";
  }
 
}



else{
  
  echo "oops something happened";
}
}

?>




  

        <div class="row mt-5">
          <div class="col-md-6 offset-md-3 mt-5">
        <form action="" method="post" class="mt-5" >
            <h2 class="text-center">Login </h2>

          <p class="form-group">
            <label class="form-label">Email:</label>
            <input type="email" name="email"  class="form-control" value="<?php
                 if(isset($_POST['email'])){
                 echo  $_POST['email'];
                  }
                ?>">
                
              <?php 
              if (isset($errors['email'])) {
                echo "<p class= 'text-danger'>" .$errors['email'] ."</p>";
              }
              ?>
          </p>

          <p class="form-group">
            <label class="form-label">Password:</label>
            <input type="password" name="password"  class="form-control">
                 
              <?php 
              if (isset($errors['password'])) {
                echo "<p class= 'text-danger'>" .$errors['password'] ."</p>";
              }
              ?> 
            
          </p>


            <p class="text-center">
            <input type="submit" name="submit" value="Login" class="btn btn-info">
          </p>
          

        </form>
      </div>
        </div>

        <div class="row" style="background-color:black;" >
<div class="row mt-md-5 justify-content-around">
      <div class="col-md-3">
          <i class="fa fa-envelope align-self-start mt-2 text-info"></i>
          <span  class="text-light mt-1 ms-2 ">onojasonmiracle@gmail.com</span>
        </div>
        
        <div class="col-md-2">
          <i class="fa fa-phone align-self-start mt-2 text-info"></i>
          <span  class="text-light mt-1 ms-2">+2348145939730</span>
        </div>
        <div class="col-md-2">
          <i class="fas fa-map-marker align-self-start mt-2 text-info"></i>
          <span  class="text-light mt-1 ms-2">Lagos, Nigeria</span>
        </div>
        <div class="col-md-2">
          <i class="fab fa-github align-self-start mt-2 text-info"></i>
          <span  class="text-light mt-1 ms-2">Onojason-Miracle</span>
        </div>
        
        <div class="col-md-2">
          <i class="fab fa-linkedin align-self-start mt-2 text-info"></i>
          <span  class="text-light mt-1 ms-2">Onojason Miracle</span>
        </div>
      
    </div>


  <!-- footer -->
    
        
        <!-- copyright -->
        <div class="row justify-content-center mt-5" style="background-color: black;">
          <div class="col-12">
            <div class="footerline mb-2"></div>
            <h4 class="text-light text-center">
            Copyright &copy; 2022 Onojason Miracle. All rights reserved
            </h4>
          </div>
        </div>
        </div>

      
       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     </body>
     </html>

    
