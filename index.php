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
  <div class='container-fluid car' style="position: relative;">
    <div class="row"> 
      <div class="col">
      
      <!--navbar-->
    
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

      </ul>
     
    </div>
 

</nav>

</div>
</div>


<div class="row mt-md-5 car">
    <div class="col-md-6 offset-md-3 mt-md-5" style="height: 450px; position: relative;margin-top:100px;">
      <p class="text-center core-icon mt-md-5"><i class=" my-3  fa-solid fa-thumbs-up core"></i></p>





                    <?php 



//include_once("mimi/lib.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

    $errors = array();

  if (empty($_POST['firstname'])) {
      $errors['firstname'] = "please enter your firstname";
    }


    if (empty($_POST['lastname'])) {
      $errors['lastname'] = "please enter your lastname";
    } 

    if (empty($_POST['email'])) {
      $errors['email'] = "Email address is required";
    } 


    if (empty($_POST['comment'])) {
      $errors['comment'] = "please leave a comment";
    } 

    if (empty($errors)) {
include_once("admin.php");
$firstname=strip_tags(trim($_POST['firstname']));
$lastname=strip_tags(trim($_POST['lastname']));
$email=strip_tags(trim($_POST['email']));
$comment=strip_tags(trim($_POST['comment']));


 //var_dump($_POST);
// echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";
    $obj=new Owner;
    $output=$obj->comment($firstname, $lastname, $email, $comment);
    if($output==true){
        echo "<h3 class='mt-5'>Hello ".ucwords($_POST['firstname']." ".$_POST['lastname'])." thank you for your message, we will get back to you shortly!</h3>";

        
    }else{echo"Sorry your message could not be sent";}

}
}

?>


</div>
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
     

