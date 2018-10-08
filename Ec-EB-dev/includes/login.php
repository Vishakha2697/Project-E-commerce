<?php include "db.php"; ?>
<?php session_start();?>

<?php 
	if (isset($_POST['login'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$query = "SELECT * FROM details WHERE email = '$email'";
		$show_user_info = mysqli_query($conn, $query);
		if (!$show_user_info) {
			die("Sorry! Query failed. " . mysqli_error($conn));
		}
		 while ($row = mysqli_fetch_assoc($show_user_info)) {
			
			
			 $db_name           =$row['name'];
             $db_email 		    =  $row['email'];
             $db_user_password 	=  $row['password'];
           
		 }
        $password = crypt($password,$db_user_password);
        
         if($password==$db_user_password) {
             
             
             $_SESSION['name'] = $db_name;
             
             
             header("location: ../index.php");
            
         }
        else{
              header("location: ../index.php");
        }
   }
        
//        if(mysqli_num_rows($show_user_info)==1){
//       
//            header("location: ../index.php");
//        }
//        else{
//            header("location: ../checkout.php");
//        }
         
    

	
?>