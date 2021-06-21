<?php 
require('includes/connect.php');
$cat_sql =$conn->query("SELECT * FROM category");

 ?>

    </style>
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <style type="text/css">
      a:hover {
        background-color: white;
        display: block;
        border-radius: 5px;
        color: white;

      }
      nav{
        text-decoration-color: white;
      }
      .dropdown-item: a:hover{
        background-color: blue;
        color: blue;

      }
    </style>
    <body>
          <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">MR SUNSHINE HOTEL</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="#">ABOUT</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  CATEGORIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php while($cat_results=mysqli_fetch_assoc($cat_sql)): ?>
                  <a class="dropdown-item link" style="display: block;" href="selectedcat.php?category=<?=$cat_results['category']; ?>" ><?=strtoupper( $cat_results['category']); ?></a>
                  <div class="dropdown-divider"></div>
                  <?php endwhile; ?>
                </div>
                
              </li>
              <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ACCOUNT
                </a>
                <div class="dropdown-menu text-uppercase" aria-labelledby="navbarDropdownMenuLink" style="padding: 20px;">
                  <a href="profile.php">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a href="ord.php">orders</a>
                  <div class="dropdown-divider"></div>
                  <a href="#">inbox  <span class="badge badge-danger">0</span></a>
                  <div class="dropdown-divider"></div>
                  <a href="index.php">Logout</a>
                  <div class="dropdown-divider"></div>
                </div>
                
              </li>

              </ul>
            </div>
          </nav>
   
