<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php session_start();?>
<?php
if(isset($_GET['add'])){
    $pro_id =$_GET['add'];
    $query = "SELECT * FROM products WHERE product_id = '$pro_id'"; 
    $result = mysqli_query($conn,$query);

  confirm($result);
    if(mysqli_num_rows($result)>0){

    
    while($row = mysqli_fetch_array($result)) {
        
         $prod_quant = $row['product_quantity'];
         $prod_title = $row['product_title'];
         if($prod_quant > $_SESSION['product_'. $pro_id]){
            $_SESSION['product_' . $pro_id]+=1;
       header('location:checkout.php');
       

         }
         else{
        $message = "We only have " . $prod_quant . " " . $prod_title . " available";
            redirect("checkout.php?message=$message");

         }

     }
 }

}

if(isset($_GET['remove'])){
    $_SESSION['product_' . $_GET['remove']]--;
    if($_SESSION['product_' . $_GET['remove']]<1){
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect("checkout.php");
    }
    else{
        redirect("checkout.php");
    }
}

if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']]='0';
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect("checkout.php");
    }
    


function cart(){

    $total=0;
    $item_quantity=0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    foreach ($_SESSION as $name => $value) {

      if($value > 0){
if(substr($name, 0, 8 ) == "product_"){

    $length = strlen($name) - 8;
    $id = substr($name, 8 , $length);

$query = query("SELECT * FROM products WHERE product_id =" . escape_string($id). " ");


  confirm($query);


while($row = mysqli_fetch_array($query)){
$prod_title = $row['product_title'];
$product_id = $row['product_id'];
$product_price = $row['product_price'];
$sub = $row['product_price'];
    
    ?>
<?php 
$product_id = $row['product_id'];
$prod_title = $row['product_title'];
$product_price = $row['product_price'];
$product_quantity = $row['product_quantity'];
$sub = $row['product_price']*$value;
$item_quantity +=$value;

 ?>
 <tr>
     <td><?php echo $prod_title ?></td>
     <td>&#36;<?php echo $product_price ?></td>
     <td><?php echo $value ?></td>
     <td>&#36;<?php echo $sub ?></td>
     <td><a class="btn btn-warning" href="cart.php?remove=<?php echo $product_id; ?>"><span class="glyphicon glyphicon-minus"></span></a>   <a class="btn btn-success" href="cart.php?add=<?php echo $product_id; ?>"><span class="glyphicon glyphicon-plus"></span></a></td>  
     <td><a class="btn btn-warning" href="cart.php?delete=<?php echo $product_id; ?>"><span><i class="fa fa-trash"></i></span></a></td>
 </tr>

  <input type="hidden" name="item_name_<?php echo $item_name ?>" value="<?php echo $prod_title; ?>">
  <input type="hidden" name="item_number_<?php echo $item_number ?>" value="<?php echo $product_id; ?>">
  <input type="hidden" name="amount_<?php echo $amount ?>" value="<?php echo $product_price; ?>">
  <input type="hidden" name="quantity_<?php echo $quantity ?>" value="<?php echo $value; ?>">
 
<?php
   
    $item_name++;
    $item_number++;
    $amount++;
    $quantity++;
   
}

$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $item_quantity;

        }
    }

?>
<?php
      }

  function show_paypal(){

    if(isset($_SESSION['item_quantity'])){
    ?>

  <input type="image" name="upload"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online" >
<?php
  }      

}
}

?>

