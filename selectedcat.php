<?php 
require('includes/connect.php');
require('nav.php');
if (isset($_GET['category'])) {
  $categ= (string)$_GET['category'];

}
 ?>

<?php require('includes/header.php'); ?>
<style type="text/css">
  body{
    background: #ccffcc;
  }
</style>
  <body>

    <div class="container1 container-fluid" style="margin-top: 50px; ">
    <?php require('includes/carousel.php'); ?>

          <?php 
             $query = "SELECT * FROM prod WHERE category = '$categ' ORDER BY id ASC";
              $result = mysqli_query($conn, $query);
                if ($result): 
                  if (mysqli_num_rows($result) > 0):
                  
                     
           ?>
          <?php require('includes/itemloop.php') ?>



           <?php
     
                    
                  endif;
                  
                endif;
            ?>

      
    </div>
  




<?php include 'includes/footer.php'; ?>