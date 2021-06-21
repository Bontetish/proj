<?php 
session_start();
session_destroy();
echo '<div class="alert alert-success"';
echo "You successifully logged out! <br> Please <a href='login.php'> click here</a> to log in again";
echo '</div>';


 ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </body>
 </html>