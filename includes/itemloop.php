 <div class="row" style="padding: 30px;">
            <?php   while ($product = mysqli_fetch_assoc($result)): ?>
           <div class="col-md-3 bg-primary" style="padding: 10px;  border-radius: 10px; margin-bottom: 15px; ">
            <h4 class="text-info text-center badge-danger text-light" style="padding: 10px; border-radius: 10px;"><?php echo $product['name']; ?></h4>
            <form method="POST" action="submit.php?action=add&id=<?= $product['id'];?>">
              <div class="product_img" style="height: 200px;">
                <img style="height: 200px; width: 355px;" src="images/<?php echo $product['img']; ?>" class="img-responsive  img-thumbnail image">
              </div>
                  
                  <h6>Category: <?= $product['category']; ?></h6>                
                 <h5><strong>Price: </strong> <span class="badge badge-danger">Ksh: <?php echo $product['price'];; ?></span> </h5>
                  <!--<p><b>Description: </b> <?= $product['description']; ?></p>-->
                
              <label>Quantity: </label>
              <input type="hidden" name="pic" value="<?php echo $product['img']; ?>">
              <input type="number" name="quantity" value="1" class="form form-control">
              <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
              <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
              <input type="hidden" name="description" value="<?php echo $product['description']; ?>">
              <button type="submit" name="view" class="btn btn-success" style="margin-top: 10px">View Details</button>
              
            </form>
             
           </div>
           <?php endwhile; ?>
            
          </div>