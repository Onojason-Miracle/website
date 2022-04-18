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

      <li class="nav-item ">
          <a class=" menu-link mt-md-3" href="logout.php">Logout</a>
        </li>

       <li>
        <a href="register.php" style="text-decoration: none!important;" class="text-dark nav-link mt-md-3">Register</a>
      </li>
    
      </ul>
     
    </div>
 

</nav>

</div>
</div>



<div class="row mt-md-5">
        <div class="col mt-md-5">
            <h1 class="text-center">Clients List</h1>
             <table class="table table-striped table-hover text-center">
  <thead class="table-dark mt-md-5">
    <tr>
      <th>#</th>
      <th>Firstname</th>
      <th>Lastname</th>
       <th>Email</th>
      <th>Comment</th>
      <th>Date Sent</th>
     
    
    </tr>
  </thead>
 <tbody class="table-info">

     <?php 
    include_once("admin.php");

    // create instance of libarian class
    $obj = new Owner;

    // reference getClubs
    $user = $obj->getUsers();
    $counter = 1;

    foreach($user as $key => $value){
      $id = $value['user_id'];
      ?>
      <tr>

        <th><?php echo $counter++; ?></th>
        
        <td><?php echo $value['firstname'];?></td>
        <td><?php echo $value['lastname'];?></td>
        <td><?php echo $value['email'];?></td>
        <td><?php echo $value['comment'];?></td>
         <td><?php echo $value['date_used'];?></td>
         
        
        
        
        <!-- 
        <td>
          <a href="editauthor.php?id=<?php echo $id; ?>" class="btn btn-info">
            <i class = 'fa fa-edit'></i>Edit
          </a>
      </td>

      <td>
          <a href="deleteauthor.php?id=<?php echo $id; ?>" class="btn btn-danger">
            <i class = 'fa fa-trash'></i>Delete
          </a>
        </td> -->
      </tr>
    <?php   
    }
    ?>
   
 </tbody>


</table>

    <!-- end of divs for container,row and col-->
        </div>
    </div>
  </div>
</body>
</html>
