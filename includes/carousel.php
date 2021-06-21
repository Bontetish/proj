      <div class="row" style="border-radius:20px; height: auto; ">
        <div class="col-md-8" style="height: auto;border-radius: 20px;">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/images-19.jpg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (5).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (41).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (31).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (32).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (34).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (35).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (36).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (37).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              <div class="carousel-item">
                <img src="images/images (38).jpeg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
              
              <div class="carousel-item">
                <img src="images/Traditional-African-Jollof-rice-in-a-pot-recipe.jpg" style="height: 480px;width: auto;border-radius: 10px;" class="d-block w-100" alt="..." class="img-thumbnail">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
        <div class="col-md-4 bg-primary" style="border-radius: 10px; margin-bottom: 20px; height: auto;">
          <h3>Subscribe for the latest updates</h3>
          <form action="home.php" method="POST">
            <?php 
            if (isset($_POST['subscribe'])) {
              $email=$_POST['email'];
              if ($email !=='') {
                $sub_sql = $conn->query("INSERT INTO subscribers(subscriber_id, subscriber_name) VALUES(NULL,'$email')");
                echo '<h6 class="alert alert-success">';
                echo "You are now subscribed to our newsletter!";
                echo'<h6>';
              }
              else{
                echo '<h6 class="alert alert-danger">';
                echo "Email Field cannot be Empty!";
                echo'<h6>';
              }
              
            }

             ?>
              <input type="email" name="email" placeholder="Enter your Email here" class="form-control"><br>
              <input type="submit" name="subscribe" value="Subscribe" class="btn btn-success">

            
          </form>

          <h3>Leave a comment</h3>
          <form action="home.php" method="POST">
            <?php 
            if (isset($_POST['comment'])) {
              $uname = $_POST['uname'];
              $message = $_POST['message'];
              if ($uname !=='' && $message !=='') {
                $com_sql =$conn->query("INSERT INTO comments (com_id, uname, message) VALUES(NULL, '$uname','$message')");
                echo '<h6 class="alert alert-success">';
                echo " Dear ".$uname." Your comment was posted successively!";
                echo'<h6>';
              
              }
              else{
                echo '<h6 class="alert alert-danger">';
                echo "You must fill all the fields to comment";
                echo'<h6>';
              }
              
            }

             ?>
            <input type="text" name="uname" placeholder="Enter your name" class="form-control"><br>
            <label><i class="fas fa-comments"></i> Message: </label>
            <textarea placeholder="Type your comment here" class="form-control" name="message"></textarea><br>
            <input type="submit" name="comment" class="btn btn-success" value="Comment">
            
          </form>

        </div>

      </div>