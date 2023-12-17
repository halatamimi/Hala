
<?php
    require('configuration/config.php');
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql = "SELECT * FROM user WHERE id='$id'";
        try 
        {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            //check if it is a valid id
            if($stmt->rowCount()>0)
            {
                // echo('id exist');
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $userName=$result['name'];
                $email=$result['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MicroE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<style>
    .color:hover{
        color:#59AB6E;
    }
    .pColor{
        color:#59AB6E;
    }
</style>
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2 "></i>
                    <a class="navbar-sm-brand text-light text-decoration-none color" href="mailto:info@company.com">group@group.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none color" href="tel:079-999-9999">(+962) - 799999999</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2 color"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2 color"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2 color"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw color"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                MicroE
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?id=<?php echo($id); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php?id=<?php echo($id); ?>">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <?php
                //create an counter for the ol
                $sql="SELECT * FROM homeuser";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $count=0;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $count++;
                }
            ?> 
        <ol class="carousel-indicators">
            <?php
            $i=0;
            //create a dynamic li 
                while($i<$count)
                {
                    if($i==0)
                    {
                        ?>
                        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="<?php echo($i); ?>"></li>
                        <?php
                    }
                    $i++;
                }
            ?>
            <!-- <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner">
        <?php
        //get the imgs and the description from the db
        // $idHome=1;
        // $count=1;
        $sql="SELECT * FROM homeuser";
        try
        {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $firstItem = true;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                ?>
            <div class="carousel-item <?php echo $firstItem ? 'active' : ''; ?>">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="imgForHome/<?php echo($row['image']); ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>M</b>icroE</h1>
                                <h3 class="h2"><?php echo($row['header']); ?></h3>
                                <p>
                                    <?php echo($row['description']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $firstItem=false;
                }//end of while
                }//end of try
                catch(PDOException $e)
                {
                    echo "Connection failed: " . $e->getMessage();
                }
            ?>

            <!-- carosuel items -->
            <!-- <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Categories</h1>
                <p>
                    Here you can find the <span class="pColor"><b>Our Categories</b></span>
                </p>
            </div>
        </div>
        <!-- <div class="row">make it dynamic -->
            <?php
                $sql="SELECT * FROM catagory";
                try
                {
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $count=1;//if the count ==3 strat a new row
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        if($count==4 || $count==1)
                        {
                            echo('<div class="row">');
                        }   
            ?>
             <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="imgForCategory/<?php echo($row['image']); ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo($row['name']); ?></h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
           <!-- <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div> -->
            <?php
                    if($count==4)
                    {
                        echo('</div>');
                    }
                    if($count==3) $count=1; 
                    else $count++;     
                }//end of while
                }//end of try
                catch(PDOException $e)
                {
                    echo "Connection failed: " . $e->getMessage();
                }
            ?>
        <!-- </div> -->
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Here are some of Products that we will provide Soon.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- <a href="shop-single.php"> -->
                            <img src="imgFutured/mac.jpg" class="card-img-top" alt="...">
                        <!-- </a> -->
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!-- <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$240.00</li> -->
                            </ul>
                            <h2 class="h2 text-decoration-none text-dark">Macbook Pro M3 16-Inch</h2><hr>
                            <p class="card-text">
                            16-inch Liquid Retina XDR display
                            Three Thunderbolt 4 ports, HDMI port, SDXC card slot, headphone jack, MagSafe 3 port
                            Magic Keyboard with Touch ID
                            Force Touch trackpad
                            140W USB-C Power Adapterl.
                            </p>
                            <!-- <p class="text-muted">Reviews (24)</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- <a href="shop-single.php"> -->
                            <img src="imgFutured/asus.jpg" class="card-img-top" alt="...">
                        <!-- </a> -->
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!-- <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li> -->
                            </ul>
                            <h2 class="h2 text-decoration-none text-dark">Asus - Zenbook Pro</h2><hr>
                            <p class="card-text">
                                The best laptop for creative users, it's stylish with state-of-the art components, the best processors and fast graphics to express your creativity anywhere.                            </p>
                            <!-- <p class="text-muted">Reviews (48)</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- <a href="shop-single.php"> -->
                            <img src="imgFutured/lenovo.jpg" class="card-img-top" alt="...">
                        <!-- </a> -->
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <!-- <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$360.00</li> -->
                            </ul>
                            <h2 class="h2 text-decoration-none text-dark">ThinkPad E16 Gen 1 AMD</h2> <hr>
                            <p class="card-text">
                                The ThinkPad E16 AMD laptop is powerful, reliable, and secure—perfect for your business needs. Tackle all of your jobs and enjoy peak productivity with the power of AMD Ryzen™ 7000 Series processors and integrated AMD Radeon™ graphics. Multitask with ease, thanks to extensive DDR4 memory and speedy SSD storage.                            </p>
                            <!-- <p class="text-muted">Reviews (74)</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">MicroE</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            JORDAN, AMMAN
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">079-999-9999</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">group@group.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                <?php
                    $sql="SELECT * FROM catagory";
                    try
                    {
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                        {
                ?>

                        <li><a class="text-decoration-none" href="#"><?php echo($row['name']); ?></a></li>
                        <!-- <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li> -->
                    <?php
                    }//end of while
                    }//end of try
                    catch (PDOException $e)
                    {
                        echo "Connection failed: " . $e->getMessage();
                    } 
                    ?>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                  <!--<div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                   <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div
                </div>> -->
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 MicroE 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>

<?php
    }//if for checking the id
    else echo('invalid id number');
    }//end of try
    catch (PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }    
    }//if for check the $_GET['id']
    else // if the id does not exist
    {
        echo('no id');
    }
?>
