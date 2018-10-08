
<?php require_once("cart.php"); ?>



<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Check my Cart</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
        <!-- Custom CSS -->
        <link href="css/cart.css" rel="stylesheet">

        <style>

            h1{
                font-weight: bolder;
                text-transform: uppercase;
                color: navy;
            }
            thead{
                font-family: 'Lobster', cursive;
                font-size: 2rem;
                font-weight: bolder;
            }
            tbody{
                color: black;
                
            }
            
        </style>


    </head>

    <body>



        <!-- Page Content -->
        <div class="container">


            <!-- /.row -->

            <div class="row">
                <!-- $message =  -->
                <h4 class="text-center " style="font-size:5rem; ">
                    <?php if(isset($_GET['message'])){
    $mess = $_GET['message'];
    echo  $mess;      }  ?>
                </h4>
                <h1>Checkout </h1>
                <div class="col-md-4">
                    <a href="products.php"><button class="btn btn-info">Back to Shopping</button></a>
                </div>


                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="finishing_touch-facilitator@gmail.com">
                    <table class="table table-striped">
                        <thead>
                            <tr style="text-transform:uppercase;">
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub-total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php cart(); ?>
                        </tbody>
                    </table>
                    <?php echo show_paypal(); ?>
                </form>



                <!--  ***********CART TOTALS*************-->

                <div class="col-xs-4 pull-right ">
                    <h2 style="  font-family: 'Lobster', cursive;">Cart Totals</h2>

                    <table class="table table-bordered" cellspacing="0">

                        <tr class="cart-subtotal">
                            <th>Items:</th>
                            <td><span class="amount">
                                <?php 

                                echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";

                                ?></span></td>
                        </tr>
                        <tr class="shipping">
                            <th>Shipping and Handling</th>
                            <td>Free Shipping</td>
                        </tr>

                        <tr class="order-total">
                            <th>Order Total</th>
                            <td><strong><span class="amount">&#36;


                                <?php 

                                echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";

                                ?>



                                </span></strong> </td>
                        </tr>


                        </tbody>

                    </table>

            </div><!-- CART TOTALS-->


        </div>
        <!--Main Content-->


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2030</p>
                </div>
            </div>
        </footer>


        </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    </body>

</html>
