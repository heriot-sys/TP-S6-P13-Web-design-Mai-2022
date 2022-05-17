<?php
require_once('../incs/function.php');
require_once('../incs/connexion.php');
require_once('../incs/chargerClasse.php');

$latest_article = get_latest_article();
$recent_article = get_recent_articles();
$africa_article = get_africa_articles();
$europe_article = get_europe_articles();
$asia_article = get_asia_articles();

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">

            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
       

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <center><ul style="color : red;">   ETU1171 </ul></center>
				    <ul style="color : blue;"><a href="login.php">->Acceder à la page admin</a></ul>
                                </div>
                                
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-3 col-lg-9 col-md-3">
                                <div class="header-banner f-right ">
                                    <img src="images/logo.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-9 col-md-6">
                                <div class="logo">
                                    <h1>Le Réchauffemet climatique</h1>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                            </div>             
                            
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                
               
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="<?php echo $latest_article[0]->_image?>" alt="">
                                <div class="trend-top-cap">
                                    <span><?php echo $latest_article[0]->_continent?></span>
                                    <h2><a href="details.html"><br> <?php echo $latest_article[0]->_titre ?></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php for ($i=0;$i<count($recent_article);$i++){?>
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="<?php echo $recent_article[$i]->_image?>" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1"><?php echo $recent_article[$i]->_continent ?></span>
                                        <h4><a href="details.html"><?php echo $recent_article[$i]->_titre?></a></h4>
                                    </div>
                                </div>
                                
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Actualité en Afrique</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php for ($i=0;$i<count($africa_article);$i++){?>
                            <div class="weekly-single active">
                                <div class="weekly-img">
                                        <img src="<?php echo $africa_article[$i]->_image?>" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $africa_article[$i]->_continent ?></span>
                                    <h4><a href="#"><?php echo $africa_article[$i]->_titre ?></a></h4>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>        
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="section-tittle mb-30">
                            <h3>Actualité en Asie</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php for ($i=0;$i<count($asia_article);$i++){?>
                            <div class="weekly-single active">
                                <div class="weekly-img">
                                        <img src="<?php echo $asia_article[$i]->_image?>" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $asia_article[$i]->_continent ?></span>
                                    <h4><a href="#"><?php echo $asia_article[$i]->_titre ?></a></h4>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>    
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Actualité en Europe</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php for ($i=0;$i<count($europe_article);$i++){?>
                            <div class="weekly-single active">
                                <div class="weekly-img">
                                        <img src="<?php echo $europe_article[$i]->_image?>" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1"><?php echo $europe_article[$i]->_continent ?></span>
                                    <h4><a href="#"><?php echo $europe_article[$i]->_titre ?></a></h4>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>       
    <!-- End Weekly-News -->
   
    
    
    
    
    </main><br>
    
   <footer>
       <center>ETU1171</center>
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	   

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        

        
    </body>
</html>