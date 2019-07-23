<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from aeon7.netlify.com/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2019 12:05:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="<?php echo $businessData->tags; ?>" />
    <meta name="description" content="Aeon - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title><?php echo $businessData->company_name; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>

    <!-- =====================================
    	  ==== Start Loading -->

    <div class="loading">
        <div class="gooey middle">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- End Loading ====
        ======================================= -->



    <!-- =====================================
        ==== Start Navbar -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="<?php echo IMAGE . $businessData->picture_path; ?>" style="width:60px" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <?php if(!empty($businessData->business_details->about_us)){?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                    </li>
                    <?php } if(!empty($gallery)){?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Portfolio</a>
                    </li>
                    <?php } if(!empty($businessData->product_dealing)){?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Services</a>
                    </li>
                    <?php } if(!empty($testimonialsData)){?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">Testimonials</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="8">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
        ======================================= -->



    <!-- =====================================
        ==== Start Header -->

    <header class="header valign bg-img parallaxie" data-scroll-index="0" data-overlay-dark="5"
        data-background="<?php echo IMAGE . ($businessData->business_details->cover_image); ?>">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center caption mt-50">
                    <h1 class="cd-headline clip">
                        <span class="blc"><?php echo $businessData->company_name; ?></span>
                    </h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                            <p><?php echo mb_strimwidth($businessData->business_details->about_us, 0, 50, "..."); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- End Header ====
        ======================================= -->



    <!-- =====================================
        ==== Start Hero -->
        <?php if(!empty($businessData->business_details->about_us)){?>
    <section class="hero section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="intro text-center mb-100">
                        <h2><span class="textio"><div class="wow ctextio"></div>We Focus On Brands,</span><br>
                        <span class="textio"><div class="wow ctextio" data-delay="400"></div> Products And Campaigns!</span></h2>
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
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- End Hero ====
        ======================================= -->

    <!-- =====================================
        ==== Start Portfolio -->
<?php if(!empty($gallery)){?>
    <section class="portfolio section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head col-lg-12">
                    <h4><span class="textio"><div class="wow ctextio"></div>Our <i>Portfolio</i></span></h4>
                </div>

                <!-- gallery -->
                <div class="gallery full-width">

                    <!-- gallery item -->
                    <?php foreach ($gallery as $image) { ?>
                    <div class="items graphic">
                        <div class="item-img">
                            <img src="<?php echo IMAGE . $image; ?>" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <a href="<?php echo IMAGE . $image; ?>" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
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
    <!-- End Portfolio ====
        ======================================= -->



    <!-- =====================================
        ==== Start Services -->
<?php if(!empty($businessData->product_dealing)){?>
    <section class="services section-padding bg-gray" data-scroll-index="3">
        <div class="container text-center">
            <div class="row">

                <div class="section-head col-lg-12">
                    <h4><span class="textio"><div class="wow ctextio"></div>Our <i>Services</i></span></h4>
                </div>
                <?php
                $serviceArr = explode(",", $businessData->product_dealing);
                foreach ($serviceArr as $service) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="item mb-50">
                        <span class="icon ti-tablet"></span>
                        <div class="cont">
                            <h5><span></span><?php echo $service; ?></h5>
                            <!-- <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh volutpat condim.</p> -->
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- End Services ====
        ======================================= -->

    <!-- =====================================
        ==== Start testimonials -->
 <?php if(!empty($testimonialsData)){?>
    <section class="testimonials section-padding bg-img bg-fixed" data-scroll-index="5" data-overlay-dark="5"
        data-background="assets/img/bg2.jpg">
        <div class="container">
            <div class="row">

                <div class="title valign col-lg-5">
                    <div>
                        <h3><span class="textio light"><div class="wow ctextio light"></div>What Our</h3>
                        <h3><span class="textio light"><div class="wow ctextio light" data-delay="400"></div><i>Clients</i> Say?</h3>
                        <span class="icon valign">
                            <img src="assets/img/clients/quote.svg" alt="">
                        </span>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="owl-carousel owl-theme">
                        <?php foreach($testimonialsData as $testimonials){ ?>
                        <div class="item">
                            <div class="cont">
                                <p>"<?php echo $testimonials->testimonial ?>"
                                </p>
                                <div class="info">
                                    <div class="author">
                                        <img src="<?php echo IMAGE.$testimonials->path ?>" alt="">
                                    </div>
                                    <h6><?php echo $testimonials->author_name ?><span><?php echo $testimonials->email_id ?></span> </h6>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- End testimonials ====
        ======================================= -->

    <!-- =====================================
        ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="8">
        <div class="container">
            <div class="row">

                <div class="section-head col-lg-12">
                    <h4><span class="textio"><div class="wow ctextio"></div>Contact <i>Us</i></span></h4>
                </div>

                <div class="col-lg-4 col-md-5">
                    <div class="cont-info">
                        <div class="info">
                            <h6><span class="icon ti-location-pin"></span>Address:</h6>
                            <p><?php echo $businessData->address . ', ' . $businessData->near_by . ', '.$businessData->city .' - ' . $businessData->pin_code . '.' ?></p>
                            <p><?php echo $businessData->state . ', ' . $businessData->country;; ?></p>
                        </div>
                        <div class="info">
                            <h6><span class="icon ti-email"></span>Email:</h6>
                            <?php
                            $emailarr = explode(",", $businessData->email);
                            foreach ($emailarr as $email) { ?>
                                <p><?php echo $email; ?></p>
                            <?php } ?>
                        </div>
                        <div class="info">
                            <h6><span class="icon ti-headphone-alt"></span>Phone:</h6>
                            <p><?php echo $businessData->person_name; ?></p>
                            <?php if( !empty($businessData->person_number)) ?>
                            <p>Persone No. : <?php echo '+91 ' . $businessData->person_number; ?></p>
                            <?php if( !empty($businessData->corporate_no) ) ?>
                            <?php $Num = explode(',',$businessData->corporate_no) ?>
                            <p>Corporate No. : <?php echo '+91 ' .$Num[0] ; ?></p>
                            <?php for ($i=1; $i < count($Num) ; $i++) { ?>
                                <p><?php echo '+91 ' .$Num[$i] ; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <form class="form col-lg-7 col-md-7 offset-lg-1" id="contact-form" method="post"
                    action="https://aeon7.netlify.com/contact.php">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" placeholder="Name"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email"
                                        required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_mobile" type="text" name="mobile" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                        required="required"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 text-center mt-10">
                                <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>

        <br><br>
        <hr>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5" style="padding-right:20px">
                    <div class="cont-info">
                        <h6>Working Hours:</h6> 
                        <p><?php echo 'Monday : ' . $businessData->working_hours->Monday ?></p>
                        <p><?php echo 'Tuesday : ' . $businessData->working_hours->Tuesday ?></p>
                        <p><?php echo 'Wednesday : ' . $businessData->working_hours->Wednesday ?></p>
                        <p><?php echo 'Thursday : ' . $businessData->working_hours->Thursday ?></p>
                        <p><?php echo 'Friday : ' . $businessData->working_hours->Friday ?></p>
                        <p><?php echo 'Saturday : ' . $businessData->working_hours->Saturday ?></p>
                        <p><?php echo 'Sunday : ' . $businessData->working_hours->Sunday ?></p>
                        <p><?php echo 'Lunch : ' . $businessData->working_hours->Lunch ?></p>
                    </div>
                </div>
                <!-- The Map -->
                <div class="map col-md-6 bg-img-height-sm">
                    <div id="ieatmaps" style="  position: absolute; width:100%; height:100%; top: 0; left: 0;">
                        <iframe src="https://maps.google.com/maps?q=<?php echo $businessData->lat;?>,<?php echo $businessData->lng;?>&hl=es;z=14&amp;output=embed" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr>

    </section>

    <!-- End Contact ====
        ======================================= -->



    <!-- =====================================
        ==== Start Footer -->

    <footer class="text-center position-re">

        <span class="totop ti-angle-double-up" data-scroll-nav="0"></span>

        <div class="container">

            <!-- <div class="social">
                <a href="#0" class="icon"> -->
                <p>&copy; 2019 <?php echo $businessData->company_name; ?>. All Rights Reserved.</p>
                
                <?php foreach ($businessData->social_links as $link) {
                            if($link->name == "Whatsapp"){ $social = 'https://wa.me/'.$link->link; }else{ $social = $link->link;}
                            echo ' &nbsp;&nbsp;<a href=' . $social . ' target="_blank" class="icon">
                        <img src=' . IMAGE . $link->icon . ' style="width: 20px; height: 20px; margin:30px 0px"></a> '; } ?>
                <!-- </a>
            </div> -->
            <br><br>
            <a href="https://searchus.in/" target="_blank"><img src="https://www.searchus.in/images/server/min-logo.jpg" style="width:30px"><p>Powered by Search Us</p></a>

        </div>

        <div class="curve curve-top curve-center"></div>
    </footer>

    <!-- End Footer ====
        ======================================= -->





    <!-- jQuery -->
    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>

    <!-- popper.min -->
    <script src="assets/js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- scrollIt -->
    <script src="assets/js/scrollIt.min.js"></script>

    <!-- animated.headline -->
    <script src="assets/js/animated.headline.js"></script>

    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!-- parallaxie js -->
    <script src="assets/js/parallaxie.js"></script>

    <!-- aos js -->
    <script src="assets/js/wow.min.js"></script>

    <!-- jquery.waypoints.min -->
    <script src="assets/js/jquery.waypoints.min.js"></script>

    <!-- jquery.counterup.min -->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- validator js -->
    <script src="assets/js/validator.js"></script>

    <!-- custom scripts -->
    <script src="assets/js/scripts.js"></script>

    <script>
        new WOW().init();
    </script>


</body>


<!-- Mirrored from aeon7.netlify.com/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2019 12:06:04 GMT -->
</html>