<?php include "includes/db.php"?>
<?php include "includes/header.php"?>


<link rel="stylesheet" href="css/product.css">
<style>
    
    #teammate{
        display: none;
    }
</style>
<body>
 <?php include "includes/navigation.php"?>
   
  
 <div class="container-fluid padding">
     <div class="row" >
         <div class="col-lg-2">
            
              <ul class="list-unstyled" style="position:fixed;" id="category">
                        <h2 class="text-center">Categories</h2>
                        <?php 

                            $query = "SELECT * FROM categories";
                            $show_data_from_categories = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($show_data_from_categories)) {
                                $cat_id    = $row['cat_id'];
                                $cat_title = $row['cat_title'];

                        ?>

                        <li>
                            <h5><a href="categories.php?cat_id=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a></h5>
                        </li>

                        <?php } ?>
                    </ul>
         </div>
         <div class="col-lg-10">
         <div class="row">
     <?php 
     $query = "SELECT * FROM products";
     $show_product = mysqli_query($conn,$query);
        if(mysqli_num_rows($show_product)>0){
            while($row = mysqli_fetch_assoc($show_product)){
                $product_title = $row['product_title'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                 $product_quantity=$row['product_quantity'];
                $product_name = $row['product_name'];
                $product_id = $row['product_id'];
                
                ?>
                
                <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:80px;">
                <div class="card margin" style="width: 18rem;">
  <img class="card-img-top img-fluid" src="resources/img/<?php echo $product_image?>" alt="Card image cap" style="  height: 250px;
    width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product_title?></h5>
    <p class="card-text" style="  font-family: 'Lobster', cursive;">Give your home a makeover by shopping from a latest and stylish collection of home décor articles and avail amazing deals, discounts and offers on this range of home décor products</p>
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $product_id?>">
  More Detail
</button>

<!-- Modal -->
<div class="modal fade" id="<?php echo $product_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $product_title?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="resources/img/<?php echo $product_image?>" alt="" class="img-fluid " style="  height: 250px;
    width: 100%;">
        <h3>Rs.<?php echo $product_price;?></h3>
        <h4>Free Home Delivery</h4>
      </div>
      <div class="modal-footer">
 
       <?php
          
            if($_SESSION['name']){
                
                ?>   
        <a class="btn btn-secondary" target="_self" href="cart.php?add=<?php echo $product_id; ?>">Add to cart</a>
  
        <?php  }
         else{
              
              ?>
             <a class="btn btn-secondary disabled" target="_self" href="cart.php?add=<?php echo $product_id; ?>"  >Add to cart</a>
      
              <?php
          }?>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
               
               </div>
                <?php
                
            }
        }
     
     ?>
     </div>
     </div>
 </div>
    </div>













