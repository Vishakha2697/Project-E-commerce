<?php include "includes/db.php" ?>
<?php include "includes/header.php"?>
<link rel="stylesheet" href="css/index.css">
</head>
<body>
   

    <!-- Navigation -->
    <?php include "includes/navigation.php"?>

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1" ></li>
            <li data-target="#slides" data-slide-to="2" ></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img src="resources/img/background.png" >
                <div class="carousel-caption">
                    <h1 class="dsplay-2">Finishing Touch</h1>
                    <h3>Brand Surviving for ages</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/img/b2.png" >
                <div class="carousel-caption">
                    <h1 class="dsplay-2">Finishing Touch</h1>
                    <h3>Great companies are built on great products</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/img/b3.png" >
                <div class="carousel-caption">
                    <h1 class="dsplay-2">Finishing Touch</h1>
                    <h3>Growth is never by mere chance; it is the result of forces working together.
                        – James Cash Penney, Founder of JCPenney</h3>

                </div>
            </div>
        </div>
    </div>

    <!--- Jumbotron -->


    <!--- Welcome Section -->
    <div class="container-fluid padding" >
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Built with ease</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">This E-Commerce website is designed using latest technologies such as</p> 
            </div>
        </div>
    </div>

    <!--- Three Column Section -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-code"></i>
                <h3>HTML5</h3>
                <p>Built with the latest version of HTML, HTML5.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-bold"></i>
                <h3>Bootstrap</h3>
                <p>Built with the versions of Bootstrap, Bootstrap4.</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fab fa-css3"></i>
                <h3>CSS3</h3>
                <p>Built with the versions of CSS, CSS3.</p>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!--- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>If you build it...</h2>
                <p>This Website is built using <b>PHP</b>  which is the most widely used Backend Language and is being used for ages for its clean and flexible functionalities and compatiability with <b>MySQL</b> </p>
                <br>

            </div>
            <div class="col-lg-6">
                <img src="resources/img/phpsql.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <hr class="my-4">
    <!--- Fixed background -->
    <figure>
        <div class="fixed-wrap">
            <div id="fixed">

            </div>
        </div>
    </figure>

    <!--- Emoji Section -->
    <button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun</button>
    <div id="emoji" class="collapse">
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="resources/img/gif/panda.gif">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="resources/img/gif/poo.gif">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="resources/img/gif/unicorn.gif">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="resources/img/gif/chicken.gif">
                </div>

            </div>
        </div>
    </div>

    <!--- Meet the team -->
    <section id="team">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-4">Meet the Team</h1>
            </div>
            <hr>
        </div>
    </div>
</section>
    <!--- Cards -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-3">
                <div class="card">
                    <img src="resources/img/team1.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Archit Maniyath</h4>
                        <p class="card-text">Archit is a Engg student having passion for web development</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="resources/img/team2.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Vishakha Chauhan</h4>
                        <p class="card-text">Vishakha is a Engg student who is at a learning stage</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="resources/img/team3.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Sanika Golash</h4>
                        <p class="card-text">Sanika is a Engg student with experience in java</p>
                   
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="resources/img/team3.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Sonali Ghadi</h4>
                        <p class="card-text">Sonali is a Engg student with experience in designing.</p>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>Our Philosophy</h2>
                <p>“You should learn from your competitor, but never copy. Copy and you die.”- Jack Ma, Executive Chairman of Alibaba Group</p>
                <br>
            </div>

            <div class="col-lg-6">
                <img src="resources/img/quote.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>


    <!--- Connect -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Connect</h2>
            </div>
            <div class="col-lg-2 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="col-lg-2 social padding">
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="col-lg-2 social padding">
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <div class="col-lg-2 social padding">
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-lg-2 social padding">
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>





        </div>
    </div>


<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <h1>Finishing Touch</h1>
                <hr class="light">
                <p>555-555-5555</p>
                <p>email@myemail.com</p>
                <p>100 Street Name</p>
                <p>City, State, 00000</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours</h5>
                <hr class="light">
                <p>Monday: 9am - 5pm</p>
                <p>Saturday:10am - 4pm</p>
                <p>Sunday: closed</p>

            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Service</h5>
                <hr class="light">
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; Finishing.com</h5>
            </div>
        </div>
    </div>
</footer>
<?php include "includes/footer.php"  ?>




