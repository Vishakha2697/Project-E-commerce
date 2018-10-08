<?php include "db.php"; ?>

<?php


if(isset($_POST['signup'])) {
  
    $name       =  $_POST['name'];
    $email      =  $_POST['email'];
    $password   =  $_POST['password'];
   
    if(!empty($name) && !empty($email) && !empty($password)) {
        $name      =  mysqli_real_escape_string($conn,$name);
        $email     =  mysqli_real_escape_string($conn,$email);
        $password  =  mysqli_real_escape_string($conn,$password);
       
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password,$hashF_and_salt);
        
        
        $query = "INSERT INTO details(name, email, password)";
        
        $query .= "VALUES('{$name}','{$email}','{$password}')";
        
        $signup_user_query = mysqli_query($conn,$query);
        if(!$signup_user_query) {
            die("Query Failed! " . mysqli_error($conn));
            mysqli_error($conn);
        } else {
            header('Location: ../authenticate.php');
        }
        
    } else {
        $message = "Fields cannot be empty!";
    }
}

?>