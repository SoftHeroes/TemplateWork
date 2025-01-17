<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Mate - Parallax Website Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/line-icons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">    
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <style>
        .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
        </style>

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.html" class="navbar-brand"><img class="img-fulid" src="<?php echo IMAGE . $businessData->picture_path; ?>" alt="" style="width:50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#about_us">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#gallery">Gallery</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Works</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Blog</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#about_us">About us</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Services</a>
            </li>
            <li>
              <a class="page-scroll" href="#gallery">Gallery</a>
            </li>
            <!-- <li>
              <a class="page-scroll" href="#features">Features</a>
            </li> -->
            <!-- <li>
              <a class="page-scroll" href="#portfolios">Works</a>
            </li> -->
            <!-- <li>
              <a class="page-scroll" href="#pricing">Pricing</a>
            </li> -->
            <!-- <li>
              <a class="page-scroll" href="#team">Team</a>
            </li> -->
            <!-- <li >
              <a class="page-scroll" href="#blog">Blog</a>
            </li> -->
            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php echo $businessData->company_name; ?></h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><?php echo $businessData->tags; ?></p>
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Download</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 


    <!-- about_us Section Start -->
    <?php if(!empty($businessData->business_details->about_us)){?>
    <section id="about_us" class="section">
    <br><br>
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">About us</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Who We Are And What Can We do?</p>
          <br><br>
          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
          <?php echo $businessData->business_details->about_us; ?>
          <?php
            if(!empty($businessData->business_details->payment)){
                echo "<br> <br>We accept payments - .".$businessData->business_details->payment;
            }
            if(!empty($businessData->gst)){
                echo "<br>GST No. - .".$businessData->gst;
            }
            ?>
          </p> </h2> 
        </div>
        <!-- <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-pencil"></i>
              </div>
              <h4>Content Writing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-code"></i>
              </div>
              <h4>Web Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lnr lnr-mustache"></i>
              </div>
              <h4>Business Consultancy</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <?php } ?>
    <!-- about_us Section End -->

    <!-- Services Section Start -->
    <?php if(!empty($businessData->product_dealing)){?>
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our Services</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
        <?php
        $serviceArr = explode(",", $businessData->product_dealing);
        foreach ($serviceArr as $service) { ?>
          <div class="col-lg-6 col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-pencil"></i>
              </div>
              <h4><?php echo $service; ?></h4>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <?php } ?>
    <!-- Services Section End -->
      <?php if(!empty($gallery)){?>
      
<section id="gallery" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our gallery</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>


		<div class="row">
            
            <?php foreach ($gallery as $image) { ?>  
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
     data-image="<?php echo IMAGE . $image; ?>"
    data-target="#image-gallery">
    <img class="img-thumbnail"
     src="<?php echo IMAGE . $image; ?>"
        alt="Another alt text">
                </a>
    </div>
            
           <?php } ?>  
         
        </div>

</div>
      </section>
       <?php } ?>
      
    <!-- gallery Section Start -->
  
    <!-- gallery Section End -->

    <!-- Features Section Start -->
    <!-- <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Some Features</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Bootstrap 4 Based</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-laptop-phone"></i>
                    </span>
                    <div class="text">
                      <h4>Fully Responsive</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-layers"></i>
                    </span>
                    <div class="text">
                      <h4>Parallax Background</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cog"></i>
                    </span>
                    <div class="text">
                      <h4>Easy to Customize</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="show-box">
              <img class="img-fulid" src="assets/img/features/feature.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
    <!-- <section id="portfolios" class="section">
      
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Portfolio</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Print 
              </a>
            </div>
            
          </div>

          
          <div id="portfolio" class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/portfolio/img1.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img1.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/portfolio/img2.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img2.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/portfolio/img3.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img3.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/portfolio/img4.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img4.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/portfolio/img5.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img5.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/portfolio/img6.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img6.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section> -->
    <!-- Portfolio Section Ends --> 

    <!-- Start Video promo Section -->
    <!-- <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Our Intro video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
                <a href="https://www.youtube.com/watch?v=IXoMDwh4Cq8" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Video Promo Section -->

    <!-- Start Pricing Table Section -->
    <!-- <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Pricing Table</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Free</h2>
                <span>$00</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Get Plan</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Popular</h2>
                <span>$3.99</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Premium</h2>
                <span>$9.50</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> -->
    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
    <!-- <div class="counters section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr lnr-clock"></i>
              </div>             
              <div class="fact-count">
                <h3><span class="counter">1589</span></h3>
                <h4>Working Hours</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item">   
              <div class="icon">
                <i class="lnr lnr-briefcase"></i>
              </div>            
              <div class="fact-count">
                <h3><span class="counter">699</span></h3>
                <h4>Completed Projects</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lnr lnr-user"></i>
              </div>              
              <div class="fact-count">
                <h3><span class="counter">203</span></h3>
                <h4>No. of Clients</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lnr lnr-heart"></i>
              </div>              
              <div class="fact-count">
                <h3><span class="counter">1689</span></h3>
                <h4>Peoples Love</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Counter Section End -->

    <!-- Team section Start -->
    <!-- <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Team</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="assets/img/team/team1.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Jhon Doe</h4>
                  <p>Chief Technical Officer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="assets/img/team/team2.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Paul Kowalsy</h4>
                  <p>CEO & Co-Founder</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="assets/img/team/team3.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">                  
                  <h4 class="team-title">Emilly Williams</h4>
                  <p>Business Manager</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img class="img-fulid" src="assets/img/team/team4.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Patricia Green</h4>
                  <p>Graphic Designer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Team section End -->

    <!-- testimonial Section Start -->
    <!-- <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item">
                <img src="assets/img/testimonial/customer1.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Jone Deam</h3>
                  <span>Fondor of Jalmori</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="assets/img/testimonial/customer2.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Oidila Matik</h3>
                  <span>President Lexo Inc</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="assets/img/testimonial/customer3.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Alex Dattilo</h3>
                  <span>CEO Optima Inc</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="assets/img/testimonial/customer4.jpg" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                  <h3>Paul Kowalsy</h3>
                  <span>CEO & Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div> -->
    <!-- testimonial Section Start -->

    <!-- Blog Section -->
    <!-- <section id="blog" class="section">
      
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Recent Blog</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="assets/img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="meta-tags">
                  <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <h3>
                  <a href="single-post.html">How often should you tweet?</a>
                </h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
                </p>
                <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
              </div>
            </div>
            
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="assets/img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="meta-tags">
                  <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <h3>
                  <a href="single-post.html">Content is still king</a>
                </h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
                </p>
                <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
              </div>
            </div>
            
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="assets/img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="meta-tags">
                  <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div> 
                <h3>
                  <a href="single-post.html">Social media at work</a>
                </h3>
                <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... 
                </p>
                <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section> -->
    <!-- blog Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Contact With us</h3>
                <div class="contact-address">
                  <p><?php echo $businessData->person_name; ?> </p>
                  <p class="phone">Phone: <span>(<?php echo '+91 ' . $businessData->person_number; ?>)</span></p>
                  <p class="phone">Corporate No: <span>(<?php echo '+91 ' . $businessData->corporate_no; ?>)</span></p>
                  <p class="email">E-mail: <span>(
                    <?php
                    $emailarr = explode(",", $businessData->email);
                    foreach ($emailarr as $email){
                      echo $email;
                    } ?>)</span></p>

                    <p class="phone">Address: <span>(<?php echo $businessData->address . ', ' . $businessData->near_by . ', '.$businessData->city .' - ' . $businessData->pin_code . '.' ?> <br> <?php echo $businessData->state . ', ' . $businessData->country;; ?> )</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                  <?php foreach ($businessData->social_links as $link) {
                        if($link->name == "Whatsapp"){ $social = 'https://wa.me/'.$link->link; }else{ $social = $link->link;}
                        echo ' &nbsp;&nbsp;<a href=' . $social . ' target="_blank" class="icon">
                        <img src=' . IMAGE . $link->icon . ' style="height: 30px; margin:30px 0px"></a> '; } ?>
                  </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Your Phone Number" id="mobile" class="form-control" name="name" required data-error="Please enter your phone number">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              <li>
                <a href="#">Homepage</a>
              </li>
              <li>
                <a href="#">Services</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>All copyrights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/owl.carousel.js"></script>    
    <script src="assets/js/jquery.stellar.min.js"></script>    
    <script src="assets/js/jquery.nav.js"></script>    
    <script src="assets/js/scrolling-nav.js"></script>    
    <script src="assets/js/jquery.easing.min.js"></script>    
    <script src="assets/js/smoothscroll.js"></script>    
    <script src="assets/js/jquery.slicknav.js"></script>     
    <script src="assets/js/wow.js"></script>   
    <script src="assets/js/jquery.vide.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>    
    <script src="assets/js/jquery.magnific-popup.min.js"></script>    
    <script src="assets/js/waypoints.min.js"></script>    
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>   
    <script src="assets/js/main.js"></script>

  </body>
</html>