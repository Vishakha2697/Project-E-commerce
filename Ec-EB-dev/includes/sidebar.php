
         <div class="col-lg-2" id="sidebar">
            
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
                            <h5><a href="categories.php?cat_id=<?php echo $cat_id; ?>" id="sidebar_link"><?php echo $cat_title; ?></a></h5>
                        </li>

                        <?php } ?>
                    </ul>
         </div>