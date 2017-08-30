<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      
    <link rel="stylesheet" href="http://akhilpendyala.com/twitterClone/styles.css">  
  </head>
  <body>
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  
  <a class="navbar-brand" href="?page=home">Twitter</a>

  
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="?page=yourtimeline">Your timeline</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="?page=yourtweets">Your tweets</a>
      </li>
        <li class="nav-item">
        <a class="nav-link " href="?page=publicprofiles">Public profiles</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
        
        <?php if ($_SESSION['id']) {?>
    <a class="btn btn-outline-success my-2 my-sm-0" href="?function=logout" >Logout</a>
        <?php
}else{?>
     <button class="btn btn-outline-success my-2 my-sm-0"  data-toggle="modal" data-target="#login">Login/Signup</button>
        <?php
}?>
      
     
    </div>
 
</nav>