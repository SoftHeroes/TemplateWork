<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="keywords" content="<?php echo $businessData->tags; ?>"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!-- Title  -->
    <title><?php echo $businessData->company_name; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo IMAGE; ?>favicon.ico"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo CSS; ?>plugins.css"/>
    <!-- Core Style Css -->
    <link rel="stylesheet" href="<?php echo CSS; ?>style.css"/>
</head>
<body>

<!-- Start Loading -->
<div class="loading">
    <div class="text-center middle">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- End Loading -->

<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="" href="#">
            <img src="<?php echo IMAGE . $businessData->picture_path; ?>" alt="logo" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="icon-bar"><i class="fas fa-bars"></i></span>
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
                <?php } if(!empty($businessData->product_dealing)){?>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
                </li>
                <?php } if(!empty($gallery)){?>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Gallery</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="4">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="5">Inquiry</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<!-- Start Header -->
<header class="header slider-fade" data-scroll-index="0">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel owl-theme full-width">
                <div class="text-center item bg-img" data-overlay-dark="5"
                     data-background="<?php echo IMAGE . ($businessData->business_details->cover_image); ?>">
                    <div class="v-middle caption mt-30">
                        <div class="o-hidden">
                            <h1><?php echo $businessData->company_name; ?></h1>
                            <p><?php echo mb_strimwidth($businessData->business_details->about_us, 0, 50, "..."); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Start About -->
<?php if(!empty($businessData->business_details->about_us)){?>
<section class="services section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="intro offset-lg-1 col-lg-10 text-center mb-80">
                <div class="section-head text-center col-sm-12">
                    <h4>About</h4>
                    <h6>Who We Are And What Can We do?</h6>
                </div>
                <p><?php echo $businessData->business_details->about_us; ?></p>

                <?php
                if(!empty($businessData->business_details->payment)){
                    echo "<br><p>We accept payments - .".$businessData->business_details->payment.".</p>";
                }
                if(!empty($businessData->gst)){
                    echo "<br><p>GST No. - .".$businessData->gst.".</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- End About -->

<!-- Start Service -->
<?php if(!empty($businessData->product_dealing)){?>
<section class="services section-padding" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="intro offset-lg-1 col-lg-10 text-center mb-80">
                <div class="section-head text-center col-sm-12">
                    <h4>Our Services</h4>
                    <h6>Awesome Featruse</h6>
                </div>
            </div>
            <?php
            $serviceArr = explode(",", $businessData->product_dealing);
            foreach ($serviceArr as $service) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item mb-md50">
                        <span class="icon icon-basic-info"></span>
                        <h6><p><?php echo $service; ?></p></h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<!-- End Service -->

<!-- Start Gallery -->
<?php if(!empty($gallery)){?>
<section class="works section-padding" data-scroll-index="3">
    <div class="container-fluid">
        <div class="row">
            <div class="section-head text-center col-sm-12">
                <h4>Creative Portfolio</h4>
                <h6>Latest Projects</h6>
            </div>
            <div class="clearfix"></div>
            <!-- gallery -->
            <div class="gallery text-center full-width">
                <!-- gallery item -->
                <?php foreach ($gallery as $image) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 items graphic">
                    <div class="item-img">
                        <img src="<?php echo IMAGE . $image; ?>" alt="image" style="height: 200px; width: 100%;">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info full-width vertical-center">
                                <a href="<?php echo IMAGE . $image; ?>" class="popimg">
                                    <span class="icon icon-basic-eye"></span>
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
<!-- End Gallery -->

<!--Start Testimonials-->
<?php if(!empty($testimonialsData)){?>
<section class="testimonials carousel-single section-padding bg-img bg-fixed" data-overlay-dark="7">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-10">
                <div class="owl-carousel owl-theme text-center">
                    <?php foreach($testimonialsData as $testimonials){ ?>
                    <div class="item">
                        <div class="client-img">
                            <img src="<?php echo IMAGE.$testimonials->path ?>" alt="">
                        </div>
                        <div class="info">
                            <h6><?php echo $testimonials->author_name ?> <span><?php echo $testimonials->email_id ?></span></h6>
                        </div>
                        <p><?php echo $testimonials->testimonial ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!--End Testimonials-->

<!-- Start Contact-Info -->
<div class="contact-info section-padding" data-scroll-index="4">
    <div class="container-fluid">
        <div class="row">
            <div class="section-head text-center col-sm-12">
                <h4>Contact Us</h4>
                <h6>Feel Free To Contact Us</h6>
            </div>
            <!-- Contact Info -->
            <div class="info bg-img col-md-6" data-overlay-dark="8">
                <div class="gradient">
                    <div class="item">
                        <span class="icon icon-basic-smartphone"></span>
                        <div class="cont">
                            <h6>Contact : </h6>
                            <p><?php echo $businessData->person_name; ?></p>
                            <p>Persone No. : <?php echo '+91 ' . $businessData->person_number; ?></p>
                            <p>Corporate No. : <?php echo '+91 ' . $businessData->corporate_no; ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <span class="icon icon-basic-geolocalize-05"></span>
                        <div class="cont">
                            <h6>Address : </h6>
                            <p><?php echo $businessData->address . ', ' . $businessData->near_by . ', '.$businessData->city .' - ' . $businessData->pin_code . '.' ?></p>
                            <p><?php echo $businessData->state . ', ' . $businessData->country;; ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <span class="icon icon-basic-mail"></span>
                        <div class="cont">
                            <h6>Email : </h6>
                            <?php
                            $emailarr = explode(",", $businessData->email);
                            foreach ($emailarr as $email) { ?>
                                <p><?php echo $email; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div>
                        <?php foreach ($businessData->social_links as $link) {
                            if($link->name == "Whatsapp"){ $social = 'https://wa.me/'.$link->link; }else{ $social = $link->link;}
                            echo ' &nbsp;&nbsp;<a href=' . $social . ' target="_blank" class="icon">
                        <img src=' . IMAGE . $link->icon . ' style="height: 30px; margin:30px 0px"></a> '; } ?>
                    </div>
                </div>
            </div>
            <!-- The Map -->
            <div class="map col-md-6 bgimg-height-sm">
                <div id="ieatmaps">
                    <iframe src="https://maps.google.com/maps?q=<?php echo $businessData->lat;?>,<?php echo $businessData->lng;?>&hl=es;z=14&amp;output=embed" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact-Info -->

<!-- Start Inquiry -->
<section class="contact section-padding" data-scroll-index="5">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h4>Get In Touch</h4>
                <h6>Feel Free To Contact Us</h6>
            </div>
            <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
                <?php if(isset($send)) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success! </strong><?php echo $send->data; ?>
                    </div>
                <?php } ?>
                <form class="form" id="" method="post" action="<?php //echo base_url() ?>">
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
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Inquiry -->

<!-- Start Footer -->
<footer class="text-center">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-4">
                <a class="" href="#">
                    <h6 style="color: white"><?php echo $businessData->company_name;; ?></h6>
                </a>
                <div class="">
                    <?php foreach ($businessData->social_links as $link) {
                        if($link->name == "Whatsapp"){ $social = 'https://wa.me/'.$link->link; }else{ $social = $link->link;}
                        echo ' &nbsp;&nbsp;<a href=' . $social . ' target="_blank" class="icon">
                        <img src=' . IMAGE . $link->icon . ' style="height: 30px; margin:30px 0px"></a> '; } ?>
                </div>
                <p>&copy; 2019 <?php echo $businessData->company_name; ?>. All Rights Reserved.</p>
            </div>

            <div class="col-lg-4">
                <h6 style="color: white">Branch Address</h6><br>
                <?php if($businessData->branch_address){
                foreach ($businessData->branch_address as $branch) {  ?>
                    <p><?php echo 'Person : '.$branch->person_name . ' | Mobile : '. $branch->person_number ?></p>
                    <p><?php echo 'Email : ' . $branch->email  ?></p>
                    <p><?php echo $branch->address . ', ' . $branch->near_by . ', '.$branch->city .' - ' . $branch->pin_code . ', '.$branch->state . ', ' . $branch->country; ?></p><br>
                <?php }}else{ ?>
                    <p><?php echo 'Person : '.$businessData->person_name . ' | Mobile : '. $businessData->person_number ?></p>
                    <p><?php echo 'Email : ' . $businessData->email  ?></p>
                    <p><?php echo $businessData->address . ', ' . $businessData->near_by .', '.$businessData->city . ' - ' . $businessData->pin_code . ', '.$businessData->state . ', ' . $businessData->country; ?></p><br>
                <?php } ?>
            </div>

            <div class="text-left col-lg-4">
                <h6 style="color: white">Working Hours</h6><br>
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
    </div>
    <a href="https://searchus.in/" target="_blank"><img src="https://www.searchus.in/images/server/min-logo.jpg"><p>Powered by Search Us</p></a>
</footer>
<!-- End Footer -->

<!-- jQuery -->
<script src="<?php echo JS; ?>jquery-3.0.0.min.js"></script>
<script src="<?php echo JS; ?>jquery-migrate-3.0.0.min.js"></script>
<!-- popper.min -->
<script src="<?php echo JS; ?>popper.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo JS; ?>bootstrap.min.js"></script>
<!-- scrollIt -->
<script src="<?php echo JS; ?>scrollIt.min.js"></script>
<!-- jquery.waypoints.min -->
<script src="<?php echo JS; ?>jquery.waypoints.min.js"></script>
<!-- jquery.counterup.min -->
<script src="<?php echo JS; ?>jquery.counterup.min.js"></script>
<!-- owl carousel -->
<script src="<?php echo JS; ?>owl.carousel.min.js"></script>
<!-- jquery.magnific-popup js -->
<script src="<?php echo JS; ?>jquery.magnific-popup.min.js"></script>
<!-- stellar js -->
<script src="<?php echo JS; ?>jquery.stellar.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="<?php echo JS; ?>isotope.pkgd.min.js"></script>
<!-- YouTubePopUp.jquery -->
<script src="<?php echo JS; ?>YouTubePopUp.jquery.js"></script>
<!-- validator js -->
<script src="<?php echo JS; ?>validator.js"></script>
<!-- custom scripts -->
<script src="<?php echo JS; ?>scripts.js"></script>
</body>
</html>