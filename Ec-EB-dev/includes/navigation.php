<?php include "db.php"?>
<?php session_start();?>
<div class="navbar fixed-top navbar-expand-md navbar-light bg-light  "> <!--sticky-top-->
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="resources/img/Logo.png" alt="" class="img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class=" navbar-toggler-icon"></span>
        </button>
        <div class="collpase navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <form class="form-inline my-2 my-lg-0" action="includes/search.php" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
                </form>

                <li class="nav-item active">
                    <a href="index.php" class="nav-link"><?php
    if(isset($_SESSION["name"])){
        echo $_SESSION["name"];}
else{
    echo "Home";}?>

                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


                        <a class="dropdown-item" href="categories.php?cat_id=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a>


                        <?php } ?>
                        <!--

<a class="dropdown-item" href="#">KITCHEN</a>
<a class="dropdown-item" href="#">LIVING</a>
-->
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="#team" class="nav-link" id="teammate">Team</a>
                </li>
                <li class="nav-item ">
                    <a href="../Ec-EB-master/authenticate.php" class="nav-link">Authenticate</a>
                </li>
                <?php if(isset($_SESSION["name"]))
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
