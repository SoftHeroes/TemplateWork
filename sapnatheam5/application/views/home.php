<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $businessData->company_name; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/extras.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="<?php echo IMAGE . $businessData->picture_path; ?>" style="width:55px" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#sliders">
                  Home
                </a>
              </li>
              <?php if(!empty($businessData->business_details->about_us)){?>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <?php } if(!empty($businessData->product_dealing)){?>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <?php } if(!empty($gallery)){?>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">
                  Portfolio
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a class="nav-link" href="#WorkingHours">
                Working Hours
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
          <li>
            <a class="page-scroll" href="#sliders">
              Home
            </a>
          </li>
          <?php if(!empty($businessData->business_details->about_us)){?>
          <li>
            <a class="page-scroll" href="#about">
              About
            </a>
          </li>
          <?php } if(!empty($businessData->product_dealing)){?>
          <li>
            <a class="page-scroll" href="#services">
              Services
            </a>
          </li>
          <?php } if(!empty($gallery)){?>
          <li>
            <a class="page-scroll" href="#portfolio">
              Portfolio
            </a>
          </li>
          <?php } ?>
          <li>
            <a class="page-scroll" href="#WorkingHours">
            WorkingHours
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              Contact
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- sliders -->
      <div id="sliders">
        <div class="full-width">
          <!-- light slider -->
          <div id="light-slider" class="carousel slide">
            <div id="carousel-area">
              <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img src="<?php echo IMAGE . ($businessData->business_details->cover_image); ?>" alt="">
                    <div class="carousel-caption">
                      <h3 class="slide-title animated fadeInDown"><?php echo $businessData->company_name; ?></h3>
                      <h5 class="slide-text animated fadeIn"><?php echo mb_strimwidth($businessData->business_details->about_us, 0, 50, "..."); ?></h5>
                      
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End sliders -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <?php if(!empty($businessData->business_details->about_us)){?>
    <section id="about" class="section-padding">
      <div class="container">
        <!-- <div class="row"> -->
          <div class="col-lg-12 col-md-6 col-xs-12">
          <!-- <div class="col-lg-3 col-md-6 col-xs-12"> -->
            <div class="about block text-center">
              <!-- <img src="assets/img/about/img2.png" alt=""> -->
              <br><br>
              <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">About us</h2>
              <p><?php echo $businessData->business_details->about_us; ?>
              <?php
                if(!empty($businessData->business_details->payment)){
                    echo "<br><p>We accept payments - .".$businessData->business_details->payment.".</p>";
                }
                if(!empty($businessData->gst)){
                    echo "<br><p>GST No. - .".$businessData->gst.".</p>";
                }
                
                ?>
              </p>
            </div>
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
    </section>
    <?php } ?>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <?php if(!empty($businessData->product_dealing)){?>
    <section id="services" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <br>
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Our Services</h2>
          </div>
        </div>
        <div class="row">
        <?php
            $serviceArr = explode(",", $businessData->product_dealing);
            foreach ($serviceArr as $service) { ?>
          <div class="col-md-3 col-lg-4 col-xs-12">
            <div class="about block block-center">
              <div class="service-box" >
                <div class="service-icon text-center">
                  <i class="fa fa-cogs"></i>
                  <h2>
                    <p><?php echo $service; ?></p>
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </section>
    <?php } ?>
    <!-- Services Section End -->

    <!-- Portfolio Section -->
    <?php if(!empty($gallery)){?>
    <section id="portfolio" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <br>
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
          <?php foreach ($gallery as $image) { ?>
            <div class="col-lg-3 col-md-6 col-xs-12 mix marketing planning">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="<?php echo IMAGE . $image; ?>" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="<?php echo IMAGE . $image; ?>"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="<?php echo IMAGE . $image; ?>"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="<?php echo IMAGE . $image; ?>">
                          <h4>TITLE HERE</h4>
                        </a>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>
    <!-- Portfolio Section Ends -->

  
    <!-- WorkingHours section Start --> 
    <section id="WorkingHours" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <br>
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Working Hours</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-6 col-xs-12">
            <div class="pricing-table-item table-active">
              <div class="plan-name">
                <h3>Timing</h3>
              </div>
              <div class="plan-list">
                <ul>
                  <li> <i class="fa fa-check"></i> <?php echo 'Monday : ' . $businessData->working_hours->Monday ?></li>
                  <li> <i class="fa fa-check"></i> <?php echo 'Tuesday : ' . $businessData->working_hours->Tuesday ?></li>
                  <li> <i class="fa fa-check"></i> <?php echo 'Wednesday : ' . $businessData->working_hours->Wednesday ?></li>
                  <li> <i class="fa fa-check"></i> <?php echo 'Thursday : ' . $businessData->working_hours->Thursday ?></li>
                  <li> <i class="fa fa-check"></i> <?php echo 'Friday : ' . $businessData->working_hours->Friday ?></li>
                  <li> <i class="fa fa-check"></i> <?php echo 'Saturday : ' . $businessData->working_hours->Saturday ?></li>
                  <li> <i class="fa fa-check"></i> <?php echo 'Sunday : ' . $businessData->working_hours->Sunday ?></li>
                  <li> <i class="fa fa-check"></i> <?php echo 'Lunch : ' . $businessData->working_hours->Lunch ?></li>
                </ul>
                <br>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- WorkingHours Table Section End -->


    <!-- Contact Form Section Start -->
    <section id="contact" class="contact-form section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <br>
               <div class="row">
                   <center>   <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Contact Us</h2></center>
          </div>
        </div>
       
          <div class="col-lg-6 col-md-6 col-xs-12">
            <?php if(isset($send)) { ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success! </strong><?php echo $send->data; ?>
              </div>
            <?php } ?>
            <!-- <h3 class="title-head text-left">Get in touch</h3> -->
            <form class="form" id="" method="post" action="<?php //echo base_url() ?>">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-user"></i>
                    <input type="text" class="form-control" id="name" placeholder="Full Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-envelope-o"></i>
                    <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-pencil-square-o"></i>
                    <input type="text" class="form-control" id="subject" placeholder="Phone" required data-error="Please enter your Phone number">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                  <div class="col-lg-12 col-md-12 col-xs-12">
                    <textarea class="form-control" id="message" rows="4" placeholder="Message" required data-error="Please enter your message"></textarea>
                    <div class="help-block with-errors"></div>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="about block text-center">
                    <button type="submit" ali class="btn btn-common btn-form-submit">Send Message</button>
                <div>
                    </div>
                </div>
            </form>
          </div>
               <div class="col-lg-6 col-md-6 col-xs-12">
                    <iframe src="https://maps.google.com/maps?q=<?php echo $businessData->lat;?>,<?php echo $businessData->lng;?>&hl=es;z=14&amp;output=embed" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
            </div>
             
            </div>
           
      </div>
    </section>
    <!-- Contact Form Section End -->

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <a class="" href="#">
          <br><br>
          <h6 style="color: white"><?php echo $businessData->company_name; ?></h6>
          <br><br>
        </a>
        <div class="container-fluid">
  		    <div class="row">

            <?php foreach ($businessData->social_links as $link) { ?>
              <div class="col" >
              <?php
              if($link->name == "Whatsapp"){ $social = 'https://wa.me/'.$link->link; }else{ $social = $link->link;}
              echo ' &nbsp;&nbsp;<a href=' . $social . ' target="_blank" class="icon">
              <img src=' . IMAGE . $link->icon . ' style="width: 40px "></a> '; ?>
              </div>
              <?php } ?>
            </div>
        </div>
        <br><br>
        <p style="color: white">&copy; 2019 <?php echo $businessData->company_name; ?>. All Rights Reserved.</p>
      </div>

      <div class="col-6">
      <br><br>
        <h6 style="color: white">Branch Address</h6><br>
        <?php if($businessData->branch_address){
        foreach ($businessData->branch_address as $branch) {  ?>
            <p style="color: white"><?php echo 'Person : '.$branch->person_name . ' | Mobile : '. $branch->person_number ?></p>
            <p style="color: white"><?php echo 'Email : ' . $branch->email  ?></p>
            <p style="color: white"><?php echo $branch->address . ', ' . $branch->near_by . ', '.$branch->city .' - ' . $branch->pin_code . ', '.$branch->state . ', ' . $branch->country; ?></p><br>
        <?php }}else{ ?>
            <p style="color: white"><?php echo 'Person : '.$businessData->person_name . ' | Mobile : '. $businessData->person_number ?></p>
            <p style="color: white"><?php echo 'Email : ' . $businessData->email  ?></p>
            <p style="color: white"><?php echo $businessData->address . ', ' . $businessData->near_by .', '.$businessData->city . ' - ' . $businessData->pin_code . ', '.$businessData->state . ', ' . $businessData->country; ?></p><br>
        <?php } ?>
      </div>
      </div>
  </div>
  <a href="https://searchus.in/" target="_blank"><img src="https://www.searchus.in/images/server/min-logo.jpg" style="width:20px"><p>Powered by Search Us</p></a>
</footer>
    <!-- Footer Section End-->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>
      
  </body>
</html>
