<?php include "db.php"?>

<?php include "header.php"?>
  <link rel="stylesheet" href="../css/product.css">
  <style>
    
    #team{
        display: none;
    }
      

      }
</style>
  <body>
   <div class="navbar fixed-top navbar-expand-md navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../resources/img/Logo.png" alt="" class="img-fluid logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class=" navbar-toggler-icon"></span>
            </button>
            <div class="collpase navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                   
                    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
                        <input class="form-control mr-sm-2 search_input" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" name="submit">Search</button>
                    </form>
                    
                      <li class="nav-item active">
                        <a href="../index.php" class="nav-link"><?php
                                                if(isset($_SESSION['name'])){
                                               echo $_SESSION['name'];}
                            else{
                                echo "Home";}?>
                           
                                               </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <?php 

                            $query = "SELECT * FROM categories";
                            $show_data_from_categories = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($show_data_from_categories)) {
                                $cat_id    = $row['cat_id'];
                                $cat_title = $row['cat_title'];

                        ?>

                        
                           <a class="dropdown-item" href="../categories.php?cat_id=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a>
                        

                        <?php } ?>
<!--
                          
                            <a class="dropdown-item" href="#">KITCHEN</a>
                            <a class="dropdown-item" href="#">LIVING</a>
-->
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link" id="team">Team</a>
                    </li>
                    <li class="nav-item ">
                        <a href="../authenticate.php" class="nav-link">Authenticate</a>
                    </li>
                    <?php if(isset($_SESSION['name']))
                              {
                                 ?>
                                   <li class="nav-item ">
                        <a href="../Ec-EB-master/logout.php" class="nav-link">Logout</a>
                    </li>
                                 <?php 
                              }?>
                </ul>
            </div>
        </div>
    </div>
        
        
        
        
        
         <div class="container-fluid" >

        <div class="row">

            <!-- Blog Entries Column -->
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
                            <h5><a href="../categories.php?cat_id=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a></h5>
                        </li>

                        <?php } ?>
                    </ul>
         </div>
<div class="col-lg-10">
         <div class="row">
                <!-- <h1 class="page-header"> -->
                

            <?php 

                if (isset($_POST['submit'])) {

                    $search = $_POST['search'];

                    $query = "SELECT * FROM products WHERE product_keywords LIKE '%$search%'";
                    $search_query = mysqli_query($conn, $query);

                    if (!$search_query) {
                        die('Query Failed' . mysqli_error($conn));
                    }

                    $count = mysqli_num_rows($search_query);

                    if ($count == 0) {
                        echo "<br><hr><h3> Oh Snap!&nbsp; No Result Found.</h3>";
                    }
                    else {

                       while($row = mysqli_fetch_assoc($search_query)){
                $product_name = $row['product_name'];
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                 $product_quantity=$row['product_quantity'];
                
                ?>
                
                <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top:100px;">
                <div class="card" style="width: 18rem;">
  <img class="card-img-top img-fluid" style="  height: 250px;
    width: 100%;" src="../resources/img/<?php echo $product_image?>" alt="Card image cap">
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
        <img src="../resources/img/<?php echo $product_image?>" alt="" class="img-fluid " style="  height: 250px;
    width: 100%;">
        <h3>Rs.<?php echo $product_price;?></h3>
        <h4>Free Home Delivery</h4>
      </div>
     <div class="modal-footer">
 
       <?php
          
            if(isset($_SESSION['name'])){
                
                ?>   
        <a class="btn btn-secondary" target="_self" href="../cart.php?add=<?php echo $product_id; ?>">Add to cart</a>

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

                    <hr>

                   

            <?php 

            }

            ?>

                
            </div>
