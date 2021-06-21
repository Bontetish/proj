<?php 
require('includes/connect.php');
require('nav.php');
 ?>
<?php require('includes/header.php'); ?>

  <body>

    <div class="container1 container-fluid" style="margin-top: 50px;padding: ">
        <?php require('includes/carousel.php'); ?>

          <?php 
             $query = "SELECT * FROM prod ORDER BY id ASC";
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